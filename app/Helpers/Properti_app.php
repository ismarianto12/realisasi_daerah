<?php


// by ismarianto 
namespace App\Helpers;

use App\Models\User;
use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
// use Illuminate\Support\Facades\Session;

class Properti_app
{

    public static function getDb()
    {
        return 'retribusi_bapenda';
    }

    public static function indetitas_app()
    {
        return "Badan Pendapatan Daerah Tangerang Selatan";
    }

    public static function getTahun()
    {
        $session = (Session::get('year')) ?  Session::get('year') : '';
        return $session;
    }

    public static function user_satker()
    {
        $user_id = Auth::user()->id;
        $query   = DB::table('user')
            ->select('user.id', 'user.username', 'tmuser_level.description', 'tmuser_level.mapping_sie', 'tmuser_level.id as level_id')
            ->join('tmuser_level', 'user.tmuser_level_id', '=', 'tmuser_level.id')
            ->where('user.id', $user_id);

        $levelid = $query->first()->level_id;
        if ($levelid == 3) {
            return Auth::user()->sikd_satker_id;
        } else {
            return 0;
        }
    }

    public static function load_js(array $url)
    {
        $data     = [];
        foreach ($url as $ls) {
            $js[]     =  '<script type="text/javascript" src="' . $ls . '"></script>';
            $data     = $js;
        }
        return $data;
    }


    public static function getlevel()
    {
        $ff = Auth::user();
        // dd($user_id);
        if ($ff != null) {
            $user_id = $ff->id;
            $query   = DB::table('user')
                ->select('user.id', 'user.username', 'tmuser_level.description', 'tmuser_level.mapping_sie', 'tmuser_level.id as level_id')
                ->join('tmuser_level', 'user.tmuser_level_id', '=', 'tmuser_level.id')
                ->where('user.id', $user_id)
                ->first();
            return $query->level_id;
        } else {
            return null;
        }
    }


    public static function tgl_indo($tgl)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $split = explode('-', $tgl);
        return $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];
    }


    public static function getsatker()
    {
        $satker_id  = Auth::user()->sikd_satker_id;
        $level_id   = self::getlevel();

        if ($satker_id != '') {
            $data = Tmsikd_satker::find($satker_id);
            if ($data != '') {
                return $data->nama;
            } else {
                return 'Kosong';
            }
        } else {
            if ($level_id  == 1) {
                return 'Administrator';
            } else {
                return 'Kosong';
            }
        }
    }

    public static function UserSess()
    {
        $ff = Auth::user();
        if ($ff != null) {
            return $ff->username;
        } else {
            return null;
        }
    }

    public static function propuser($params)
    {
        $ff = Auth::user();
        if ($ff != null) {
            $data   = User::find($ff->id);
            if ($data != '') {
                return $data[$params];
            } else {
                return NULL;
            }
        } else {
            return NULL;
        }
    }


    public static function tahun_sekarang()
    {
        $data =  Tmsikd_setup_tahun_anggaran::where('active', 1)->limit(1)->get();
        return $data->first()->tahun;
    }

    // set change environment dinamically

    public static function changeEnv($data = array())
    {
        if (count($data) > 0) {

            // Read .env-file
            $env = file_get_contents(base_path() . '/.env');

            $env = preg_split('/\s+/', $env);;

            foreach ((array)$data as $key => $value) {

                foreach ($env as $env_key => $env_value) {

                    $entry = explode("=", $env_value, 2);

                    // Check, if new key fits the actual .env-key
                    if ($entry[0] == $key) {
                        // If yes, overwrite it with the new one
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        // If not, keep the old one
                        $env[$env_key] = $env_value;
                    }
                }
            }

            $env = implode("\n", $env);

            // And overwrite the .env with the new data
            file_put_contents(base_path() . '/.env', $env);

            return true;
        } else {
            return false;
        }
    }
}
