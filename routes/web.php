<?php
// @author : ismarianto 
// @aplication build at 2020  

use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@index')->middleware('auth')->name('/');
Route::get('/logout', function () {
	return redirect('/');
})->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('home', 'HomeController@index')->name('home');

	Route::get('page/{id}', 'HomeController@page')->name('page');

	Route::resource('bidang', 'TmbidangController');
	Route::get('bidang_datatable', 'TmbidangController@api')->name('bidang_datatable');

	Route::resource('holiday', 'TmholidayController');
	Route::get('holiday_datatable', 'TmholidayController@api')->name('holiday_datatable');

	Route::resource('user', 'UserController');
	Route::get('user_datatable', 'UserController@api')->name('user_datatable');

	Route::resource('pegawai', 'TmpegawaiController');
	Route::get('tmpegawai/api/data', 'TmpegawaiController@api')->name('tmpegawai.api.data');
	Route::get('tmpegawai/api/data/{id}', 'TmpegawaiController@api')->name('tmpegawai.api.data');

	Route::resource('tmpjabatan', 'TmajabatanController');
	Route::get('tmjabatan_datatable', 'TmajabatanController@api')->name('tmjabatan_datatable');
	//   
	Route::resource("tahunsikd", "sikd_tahunController");
	Route::get('tahunsikd', 'sikd_tahunController@api')->name('tahunsikd');

	Route::resource("rekening-akun", "tmrekening_akunsController");
	Route::get('rekeningakun_datatable', 'tmrekening_akunsController@api')->name('rekeningakun_datatable');

	//gete  object data
	Route::resource("sikd_object", "Sikd_rek_objController");
	Route::get('sikd_object_datatable', 'Sikd_rek_objController@api')->name('sikd_object_datatable');
	//route data badan pendapatan daerah 

	Route::resource("sikd_robject", "Sikd_rek_rincian_objController");
	Route::get('sikd_robject_datatable', 'Sikd_rek_rincian_objController@api')->name('sikd_robject_datatable');
	// get retribution receive 

	Route::resource("penerimaan", "TmpenerimaanController");
	Route::get('penerimaan_datatable', 'TmpenerimaanController@api')->name('penerimaan_datatable');
	Route::post('rekobj_rincian_json', 'TmpenerimaanController@rekobj_rincian_json')->name('rekobj_rincian_json');

	Route::resource("sikd_rek", "Sikd_rekController");
	Route::get('sikd_rek_datatable', 'Sikd_rekController@api')->name('sikd_rek_datatable');

	Route::get('export', 'TmpenerimaanController@export')->name('export');

	//Route::resource('report_penerimaan', 'ReportController');
	Route::post('reportpendapatan_api', 'ReportController@api')->name('reportpendapatan_api');

	Route::get('result_data', 'ReportController@action')->name('result_data');

	Route::prefix('laporan')->name('laporan.')->group(function () {
		Route::get('', 'ReportController@index')->name('');
		Route::get('action_all', 'ReportController@action_all')->name('action_all');
		Route::post('api_report', 'ReportController@reportperyears')->name('api_report');
			//resource data perbulan 
		Route::get('perbulan', 'ReportController@perbulan')->name('perbulan');
		Route::get('action_bulan', 'ReportController@action_bulan')->name('action_bulan');
		// grafik pendapatan  

	});
	Route::prefix('grafik')->name('grafik.')->group(function () {
		Route::get('', 'GrafikController@index')->name('/');
		Route::get('perrekjenis', 'GrafikController@tampilgrafik')->name('perrekjenis');
	});  
	Route::prefix('setting')->name('seeting.')->group(function () {
		Route::resource('', 'SettingController');
	});
	Route::prefix('akses')->name('akses.')->group(function () {
		Route::resource('level', 'TmuserlevelController');
		Route::post('level_api', 'TmuserlevelController@api')->name('level_api');
		//ganti password 
		Route::resource('profile', 'ProfileController');
	});

	Route::prefix('settingrek')->name('settingrek.')->group(function () {
		Route::resource('rek', 'SettingrekeningController');
		Route::post('batalkan', 'SettingrekeningController@batalkan')->name('batalkan');
		Route::post('batalkan_sub', 'SettingrekeningController@batalkan_sub')->name('batalkan_sub');


		Route::post('api_data_setting', 'SettingrekeningController@api')->name('api_data_setting');
		Route::post('api_data_setting_sub/{id}', 'SettingrekeningController@api_rincian_sub')->name('api_data_setting_sub');
		//patch
		Route::patch('update_rincian_sub', 'SettingrekeningController@update_rincian_sub')->name('update_rincian_sub');
	});

	Route::prefix('aplikasi')->name('aplikasi.')->group(function () {
		// opd
		Route::resource('satker', 'TmopdController');
		Route::post('satker_api', 'TmopdController@api')->name('satker_api');
		Route::post('set_active', 'TmopdController@set_active')->name('set_active');

		//get route ajax 
		Route::get('get_satker/{id}', 'TmopdController@get_satker')->name('get_satker');
		//settting user
		Route::resource('identitas', 'IdentitasController');
		//opd api
		Route::get('opdinput', 'IdentitasController@notifopd')->name('opdinput');
	});

	Route::resource('setuptahunanggaran', 'SetupTahunAnggaranController');
	Route::post('setuptahunanggaran', 'SetupTahunAnggaranController@api')->name('setuptahunaggaran.api');

	Route::prefix('bapenda')->group(function () {
		Route::namespace('Rekening')->prefix('rekening')->name('rekening.')->group(function () {
			Route::Resource('kodeakun', 'KodeakunController');
			Route::resource('kodekelompok', 'KodekelompokController');
			Route::resource('kodejenis', 'KodejenisController');
			Route::resource('kodeobjek', 'KodeobjekController');
			Route::resource('koderincianobjek', 'KoderincianobjekController');
			Route::resource('kodesubrincianobjek', 'kodesubrincianobjekController');
		});
	});
	//pendapatan route

	Route::prefix('pendapatan')->name('pendapatan.')->group(function () {
		Route::patch('updateas/{id}', 'PendapatanController@update')->name('updateas');

		Route::resource("", "PendapatanController");
		Route::get("{id}/edit", "PendapatanController@edit")->name('edit');

		Route::delete("destroy", "PendapatanController@destroy")->name('destroy');

		Route::post('api', 'PendapatanController@api')->name('api');
		//yang berkaitan dengan pendapatan
		Route::resource('target', 'PendapatanTargetController');
		Route::post('target_api', 'PendapatanTargetController@api')->name('target_api.api');
		// rincian tartet pendanpatan bapenda katanya
		Route::resource('targetrincian', 'TrtargetrincianController');
		Route::post('targetrincian_api', 'TrtargetrincianController@api')->name('targetrincian_api.api');

		//get data from access frontend js 
		Route::get('trtargetrincian_form/{id}', 'TrtargetrincianController@form')->name('trtargetrincian_form');
		Route::get('trtargetrincian_form_edit/{id}', 'TrtargetrincianController@form_edit')->name('trtargetrincian_form_edit');

		//pendapatan create
		Route::get('create/{id}', 'PendapatanController@create')->name('create');

		// get frm isian pendapatan
		Route::get('form_pendapatan/{id}', 'PendapatanController@form_pendapatan')->name('form_pendapatan');
		Route::get('pendapatandetail/{id}', 'PendapatanController@pendapatandetail')->name('pendapatandetail');

		Route::get('edit_pendapatan_form/{id}', 'PendapatanController@form_pendapatan_edit')->name('edit_pendapatan_form');
		//pendapatan data rincian
		Route::get('dapatkanpadopd/{id}', 'PendapatanController@dapatkanpadopd')->name('dapatkanpadopd');
	});
	//route datatable api
	Route::prefix('api')->group(function () {
		Route::post('setuptahunanggaran', 'SetupTahunAnggaranController@api')->name('setuptahunanggaran.api');
		Route::prefix('rekening')->namespace('Rekening')->name('rekening.')->group(function () {
			Route::post('kodeakun', 'KodeakunController@api')->name('kodeakun.api');
			Route::post('kodekelompok', 'KodekelompokController@api')->name('kodekelompok.api');
			Route::post('kodejenis', 'KodejenisController@api')->name('kodejenis.api');
			Route::post('kodeobjek', 'KodeobjekController@api')->name('kodeobjek.api');
			Route::post('koderincianobjek', 'KoderincianobjekController@api')->name('koderincianobjek.api');
			Route::post('kodesubrincianobjek', 'kodesubrincianobjekController@api')->name('kodesubrincianobjek.api');

			Route::get('kodejenis/kodekelompokByKodeakun/{id}', 'KodejenisController@kodekelompokByKodeakun')->name('kodejenis.kodekelompokByKodeakun');
			Route::get('kodeobjek/kodejenisByKodekelompok/{id}', 'KodeobjekController@kodejenisByKodekelompok')->name('kodeobjek.kodejenisByKodekelompok');
			Route::get('koderincianobjek/kodeobjekByKodejenis/{id}', 'KoderincianobjekController@kodeobjekByKodejenis')->name('koderincianobjek.kodeobjekByKodejenis');
			Route::get('kodesubrincianobjek/kodeobjekrincianByKodeobjek/{id}', 'kodesubrincianobjekController@kodeobjekrincianByKodeobjek')->name('kodesubrincianobjek.kodeobjekrincianByKodeobjek');
		});
	});

	Route::prefix('api_grafik')->group(function () {
		Route::get('listnoentri', 'ReportController@listnoentri')->name('listnoentri.api_grafik');
		Route::get('grafik_penerimaan', 'ReportController@grafik_penerimaan')->name('grafik_penerimaan.api_grafik');
		Route::get('jumlah_rek', 'ReportController@jumlah_rek')->name('grafik_penerimaan.jumlah_rek');
		Route::get('total_pad', 'ReportController@total_pad')->name('total_pad.api_grafik');
	});
	//restrict 
	Route::get('restrict', 'HomeController@restrict')->name('restrict');
});
Auth::routes();
