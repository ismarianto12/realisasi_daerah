<?php
// @author : ismarianto 
// @aplication build at 2020  

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest')->name('/');

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
    Route::get('user_datatable', 'Usercontroller@api')->name('user_datatable');

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

    Route::resource('report_penerimaan', 'ReportController');
    Route::post('reportpendapatan_api', 'ReportController@api')->name('reportpendapatan_api');

    Route::get('result_data', 'ReportController@action')->name('result_data');

    Route::prefix('laporan')->name('laporan.')->group(function () {
        Route::get('keseluruhan', 'ReportController@alldata')->name('keseluruhan');
    });

    Route::prefix('akses')->name('akses.')->group(function () {
        Route::resource('level', 'TmuserlevelController');
        Route::post('level_api', 'TmuserlevelController@api')->name('level_api');
        //ganti password 
        Route::resource('profile', 'ProfileController');
    });


    Route::resource('settingrek', 'SettingrekeningController');
    Route::prefix('settingrek')->name('settingrek.')->group(function () {
        Route::post('api_data_setting', 'SettingrekeningController@api')->name('api_data_setting');
    });

    Route::prefix('aplikasi')->name('aplikasi.')->group(function () {
        // opd
        Route::resource('satker', 'TmopdController');
        Route::post('satker_api', 'TmopdController@api')->name('satker_api');
        Route::post('set_active', 'TmopdController@set_active')->name('set_active');
        
        //settting user
    });

    Route::resource('setuptahunanggaran', 'SetupTahunAnggaranController');
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
        Route::resource("/", "PendapatanController");
        Route::post('api', 'PendapatanController@api')->name('api');
        //yang berkaitan dengan pendapatan
        Route::resource('target', 'PendapatanTargetController');
        Route::post('target', 'PendapatanTargetController@api')->name('target.api');
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
});
