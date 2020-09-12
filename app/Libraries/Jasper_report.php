<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class Jasper_report
{
    private $socket;
    private $jasper_server;
    private $jasper_port;
	private $jasper_dir;
    private $format;
    private $result;
    private $exec_time;

    private $is_non_blocking = true;


    function __construct($address="localhost", $port=9999)
    {
        // $cfg = new LivedConfig();
	    // $cfg->load();
		
		// if ($port == 9999) {		
        //     $port = $cfg->get('jasper_server_port');
        // }
        
		$this->jasper_server = $address;
        $this->jasper_port = $port;
		$this->jasper_dir = str_replace("\\", "/", base_path());
		$this->exec_time = ini_get("max_execution_time");
	
		if($this->exec_time<=0) $this->exec_time = 300000;
		elseif($this->exec_time > 18000) $this->exec_time = 180000;
    }

    public static function getArrayOutputFormats()
    {
        $arr = ["PDF-STREAM"=>"PDF Stream",
                //"PDF-FILE"=>"PDF File",
                "HTML-STREAM"=>"HTML Stream",
                //"HTML-FILE"=>"HTML File",
                "XLS-STREAM"=>"Spreadsheet Stream",
                //"XLS-FILE"=>"Spreadsheet File"
        ];
        return $arr;
    }

    public function createReport($reportName, $format, $params)
    {
        $uniqid = uniqid();
        $params .= "&UNIQID=".$uniqid;
        $this->createLog($reportName, $format, $params, $uniqid);
        $params = $this->cleanReportParameter($params);

		$this->format = $format;
        try {
            $socket = $this->connectToJasperServer($this->jasper_server, $this->jasper_port);
        } catch(Exception $e) {
            dd($e->getMessage());
        }
        $this->socket = $socket;
        $this->sendRequest($reportName, $format, $params);
        $this->result = $this->getResult();
        if(strpos($this->result,"<OK:") === false) {
            dd("Failed to create report '$reportName' : [ $this->result ]");
        } else {
            $pos = strpos($this->result, '>');
            $token = trim(substr($this->result, 4, ($pos - 4)));
            return $token;
        }
    }

    private function createLog($reportName, $format, $params, $uniqid)
    {
        $tmpegawai = (Auth::user()->tmpegawai != '' ? Auth::user()->tmpegawai : '-');
        $f = 'log/jasper/'.date('Y').'/'.date('m').'/'.date('d').'.txt';
        $w = date('Y-m-d H:i:s')." ========= ".$reportName."\n";
        $w .= "          uniqid : ".$uniqid."\n";
        $w .= "          format : ".$format."\n";
        $w .= "          Params : ".$params."\n";
        $w .= "          User   : ".Auth::user()."\n";
        $w .= "          Pegawai: ".$tmpegawai."\n";

        $exists = Storage::disk('sftp')->exists($f);
        if(!$exists)
            Storage::disk('sftp')->put($f, $w);
        else
            Storage::disk('sftp')->append($f, $w);
    }

	private function cleanReportParameter($params) 
	{
		if ($params) {
			$arrParams = explode("&", $params);
			$newParams = "";
			foreach ($arrParams as $param) {
				$keyval = explode("=", $param);
				$key = trim($keyval[0]);
                $val = trim(preg_replace("/\r/\n", " ", $keyval[1]));
                $newParams .= "$key=$val&";
			}
		}
		return $newParams;
	}

    public function showReport($rptName="")
    {
        if(strpos($this->result,"<OK:")!=0) {
            return 0;
        }
        $pos = strpos($this->result, '>');           
        $token = trim(substr($this->result, 4, ($pos - 4)));
        
        if ($rptName == "") $rptName = "Report-2";
        switch($this->format) {
            case "PDF-STREAM": 
                ob_end_clean();
                header("Content-type: application/pdf");
                header("Content-Length: $token");
                header("Content-Disposition: inline; filename=".$rptName.".pdf");
                $this->showResultStream($token);
                break;
            case "HTML-STREAM":
                $this->showResultStream($token);
                break;  
            case  "XLS-STREAM":
                ob_end_clean();
                header("Content-type: application/vnd.ms-excel");
                header("Content-Length: $token");
                header("Content-Disposition: inline; filename=".$rptName.".xls");
                $this->showResultStream($token);
                break;
        }
    }
    
    public function getReportFileUrl()
    {
        if(strpos($this->result,"<OK:")!=0) {
            return 0;
        }
        $pos = strpos($this->result, '>');           
        $token = trim(substr($this->result, 4, ($pos - 4)));
        
        return "tmp/" . basename($token);
    }

    public function connectToJasperServer($address="localhost", $port=9999) {
        $address = gethostbyname($address);
        $socket = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
        if ($socket === false) {
            dd("socket_create() to $address:$port failed.<br>Reason: " . socket_strerror(socket_last_error()));
        }
        
        if($this->is_non_blocking) socket_set_nonblock($socket);

        $result = @socket_connect($socket, $address, $port);
	    if ($result === false) {
            if($this->is_non_blocking) { # Always return false
                $r = $e = NULL;
                $w = array($socket);
                $n = socket_select($r, $w, $e, 5);
	        	if($n==0) dd("socket_connect() to $address:$port failed.<br>Reason: Timeout");
                if($n>0) return($socket);
                return $socket;
	        }
			dd("socket_connect() to $address:$port failed.<br>Reason: " . socket_strerror(socket_last_error($socket)));
        }

        return $socket;
    }

    public function closeConnection() {
        $msg = "DONE\n";
        socket_write($this->socket, $msg, strlen($msg));
        $dummy = $this->getResult();
    }

    public function sendRequest($reportName, $format, $params) {
        $conn_params = $this->getConnectionParams(); 
        $msg = "REPGEN;" .$conn_params. ";" . $this->jasper_dir . ";" . $reportName . ";" . $format . ";" . $params . "\n";
        socket_write($this->socket, $msg, strlen($msg));
    }

    public function getResult() {
        $result = "";
        $t1 = time();
        
        if($this->is_non_blocking) {
        	for(;;) {
                $w = $e = NULL;
	        	$r = array($this->socket);
                $n = socket_select($r, $w, $e, 5);
	        	if($this->socket) {
                    $in = socket_read($this->socket, 1);
	        		if($in=="") dd("ini socket_read() failed.<br>Reason: Connection closed!");        		
		            $result = $result . $in;
		            // echo "RESULT:[$result][$in]<br>";
		            if(strrchr($in,"\n")) break;
	        	}
	        	elseif($n==0) { # Check the timer
		            $t2 = time();
		            if ($t2 - $t1 >= $this->exec_time - 1) return "Report Generator timeout $this->exec_time sec";
	        	}
	        	else {
					dd("socket_select() failed.<br>Reason: " . socket_strerror(socket_last_error($this->socket)));        		
	        	}
        	}
        }
        else {
	        while ($in = socket_read($this->socket, 1)) {
	            $result = $result . $in;
	            $t2 = time();
	            if ($t2 - $t1 >= $this->exec_time - 1) return "Report Generator timeout $this->exec_time sec";
	            if(strrchr($in,"\n")) break;
	        }
        }
        return $result;
    }

    public function showResultStream($len) {
        $taken = 0;
        $t1 = time();

        if($this->is_non_blocking) {
	        while ($taken < $len) {
                $r = array($this->socket);
                $w = $e = NULL;
	        	$n = socket_select($r,$w,$e,5);
	        	$lenleft = ($len - $taken);
	        	if($lenleft>2048) $lenleft = 2048;
	        	if($n>0) {
	        		$in = socket_read($this->socket, $lenleft);
	        		$l  = strlen($in);
	        		if($l==0) dd("socket_read() failed.<br>Reason: Connection closed!");        		
		            $taken += $l;
	        		print $in;
	        	}
	        	elseif($n==0) { # Check the timer
		            $t2 = time();
		            if ($t2 - $t1 >= $this->exec_time - 1) return "Report Generator timeout $this->exec_time sec";
	        	}
	        	else {
					dd("socket_select() failed.<br>Reason: " . socket_strerror(socket_last_error($this->socket)));        		
	        	}
        	}
        }
        else {
	        while ($taken < $len) {
	            $in = socket_read($this->socket, 2048);
	            $l = strlen($in); if($l==0) break;
	            print $in;
	            $taken += $l;
	        }
        }
    } 
 
	private function getConnectionParams()
	{
		$db_driver = config('app.db_connection2');
		$db_host = config('app.db_host2');
		$db_post = config('app.db_port2');
		$db_name = config('app.db_database2');
		$db_user = config('app.db_username2');
		$db_pswd = config('app.db_password2');
		
		$j_driver = "com.$db_driver.jdbc.Driver";
		$j_connect = "jdbc:mysql://$db_host:$db_post/$db_name";
		
		$params = "db.driver=$j_driver&db.connect=$j_connect&db.user=$db_user&db.password=$db_pswd";
	
		return $params;
	}
}
