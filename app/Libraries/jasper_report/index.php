<?php

function connectToJasperServer($address, $port) {

    $address = gethostbyname($address);
    $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
    if ($socket === false) {
            echo "socket_create() failed: reason: " . socket_strerror(socket_last_error()) . "\n";
            return false;
        }

    $result = socket_connect($socket, $address, $port);
    if ($result === false) {
            echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
            return false;
        }

    return $socket;
}

function closeConnection($jasperServer) {
    $msg = "DONE\n";
    socket_write($jasperServer, $msg, strlen($msg));
    $dummy = getResult($jasperServer);
}

function sendRequest($jasperServer, $reportName, $format, $params) {
    $msg = "REPGEN:" . $reportName . ":" . $format . ":" . $params . "\n";
    socket_write($jasperServer, $msg, strlen($msg));
}

function getResult($jasperServer) {
    $result = "";
    while ($in = socket_read($jasperServer, 2048)) {
            $result = $result . $in;
                if(strrchr($in,"\n")) break;
        }
    return $result;
}

function showResultStream($jasperServer, $len) {
    
    $taken = 0;
    while ($taken < $len) {
        $in = socket_read($jasperServer, 2048);
        $l = strlen($in); if($l==0) break;
        print $in;
        $taken += $l;
        #print "Read: " . $len . " - Total: " . $taken . "\n";
    }
}

function getPOST($name, $default) {
    global $_POST;
        if(isset($_POST[$name])) return $_POST[$name];
    return $default;
}

$cmd = getPOST("cmd", "");
$id = getPOST("id", "");
$format = getPOST("format", "");
$msg = "";
$showForm = 1;

if(($cmd=="Test") && (strlen($id)!=0)) {
    $js = connectToJasperServer("127.0.0.1", 9999);
    if($js) {
       $params = "ID=" . $id;
       sendRequest($js, "Test1", $format, $params);
       $r = getResult($js);
       if(strpos($r,"<OK:")!=0) {
          $msg = "<br><h3> FAIL: $r </h3>";
       }
       else {
          $pos = strpos($r, '>');           
          $token = trim(substr($r, 4, ($pos - 4)));
          if($format=="PDF-STREAM") { // $token is msg length
              header("Content-type: application/pdf");
              header("Content-Length: $token");
              header("Content-Disposition: inline; filename=Report-2.pdf");
              #header("Content-type: text/plain");

              #$leftover = substr($r, $pos+1);
              #print "$r -- $token\n";
              showResultStream($js, $token);
              $showForm = 0;
          }
          elseif($format=="HTML-STREAM") { // $token is msg length
              #header("Content-type: application/pdf");
              #header("Content-Length: $token");
              #header("Content-Disposition: inline; filename=Report-2.pdf");
              #header("Content-type: text/plain");

              #$leftover = substr($r, $pos+1);
              #print "$r -- $token\n";
              showResultStream($js, $token);
              $showForm = 0;
          }
          else { // $token is filename
              $fnm = "report/" . basename($token);
              $msg = "<br><h3>[$token]</h3><br><a href=\"$fnm\"> Report Result </a>";
          }
          closeConnection($js);
      }
   }
}

if($showForm) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            Parameter: <input name="id" type="text" size="10"> 
            Output: <select name="format">
                <option value="PDF-FILE">PDF File</option>
                <option value="PDF-STREAM">PDF Stream</option>
                <option value="HTML-FILE">HTML File</option>
                <option value="HTML-STREAM">HTML Stream</option>
            </select>
            <input name="cmd" type="submit" value="Test">
        </form>
        <?php echo $msg; ?>
    </body>
</html>
<?php } ?>
