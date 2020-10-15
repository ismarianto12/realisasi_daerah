<?php


// by ismarianto 
namespace App\Helpers;

use App\Models\User;
use App\Models\Setupsikd\Tmsikd_satker;
use App\Models\Setupsikd\Tmsikd_setup_tahun_anggaran;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class Properti_app
{

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
		$user_id = Auth::user()->id;
		$query   = DB::table('user')
			->select('user.id', 'user.username', 'tmuser_level.description', 'tmuser_level.mapping_sie', 'tmuser_level.id as level_id')
			->join('tmuser_level', 'user.tmuser_level_id', '=', 'tmuser_level.id')
			->where('user.id', $user_id)
			->first();
		return $query->level_id;
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

	public static function propuser($params)
	{
		$userid = Auth::user()->id;
		$data   = User::find($userid);
		if ($data != '') {
			return $data[$params];
		} else {
			return NULL;
		}
	}


	public static function tahun_sekarang()
	{
		$data =  Tmsikd_setup_tahun_anggaran::where('active', 1)->limit(1)->get();
		return $data->first()->tahun;
	}
}
