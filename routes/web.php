<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');



Route::get('/home/materi', function () {
    return view('materi');
});

Route::get('/home/false_positive', function () {
    return view('false_positive');
});

Route::get('/home/false_negative', function () {
    return view('false_negative');
});

Route::get('/home/knowladge', function () {
    return view('knowladge');
});

Route::get('/home/miskonsepsi', function () {
    return view('miskonsepsi');
});

Route::get('/fungsiPhydiags', 'ReduksiController@fungsiPhy')->name('fungsiPhy');
Route::get('/tentangPhydiags', 'ReduksiController@tentangPhy')->name('tentangPhy');
Route::get('/panduanPhydiags', 'ReduksiController@panduanPhy')->name('panduanPhy');
Route::get('/perancangPhydiags', 'ReduksiController@perancangPhy')->name('perancangPhy');






Auth::routes();

Route::get('/logout','UserController@logout')->name('logout');

Route::get('/reduksi', 'ReduksiController@reduksi')->name('reduksi');
Route::get('/tampilReduksi', 'ReduksiController@tampilReduksi')->name('tampilReduksi');

Route::get('/createM1', 'ReduksiController@createmsatu')->name('createmsatu');
Route::post('/tambahReduksi', 'ReduksiController@tambahReduksi')->name('tambahReduksi');

Route::get('/editmsatu/{id}', 'ReduksiController@edit')->name('edit');
Route::patch('/updatemsatu/{id}', 'ReduksiController@update')->name('update');

//route reduksi m2

Route::get('/tampilReduksidua', 'ReduksiController@tampilReduksidua')->name('tampilReduksidua');
Route::get('/createM2', 'ReduksiController@create')->name('create');
Route::post('/tambahReduksidua', 'ReduksiController@tambahReduksidua')->name('tambahReduksidua');

Route::get('/editmdua/{id}', 'ReduksiController@editmdua')->name('editmdua');
Route::patch('/updatemdua/{id}', 'ReduksiController@updatemdua')->name('updatemdua');

//route redksi m3

Route::get('/tampilReduksitiga', 'ReduksiController@tampilReduksitiga')->name('tampilReduksitiga');
Route::get('/createM3', 'ReduksiController@createmtiga')->name('createmtiga');
Route::post('/tambahReduksitiga', 'ReduksiController@tambahReduksitiga')->name('tambahReduksitiga');

Route::get('/editmtiga/{id}', 'ReduksiController@editmtiga')->name('editmtiga');
Route::patch('/updatemtiga/{id}', 'ReduksiController@updateReduksitiga')->name('updatemtiga');


//route reduksi m4
Route::get('/tampilReduksiempat', 'ReduksiController@tampilReduksiempat')->name('tampilReduksiempat');
Route::get('/createM4', 'ReduksiController@createmempat')->name('createmempat');
Route::post('/tambahReduksiempat', 'ReduksiController@tambahReduksiempat')->name('tambahReduksiempat');

Route::get('/editmempat/{id}', 'ReduksiController@editmempat')->name('editmempat');
Route::patch('/updatempat/{id}', 'ReduksiController@updateReduksiempat')->name('updatemempat');

//route reduksi m5
Route::get('/tampilReduksilima', 'ReduksiController@tampilReduksilima')->name('tampilReduksilima');
Route::get('/createM5', 'ReduksiController@createmlima')->name('createmlima');
Route::post('/tambahReduksilima', 'ReduksiController@tambahReduksilima')->name('tambahReduksilima');

Route::get('/editmlima/{id}', 'ReduksiController@editmlima')->name('editmlima');
Route::patch('/updatemlima/{id}', 'ReduksiController@updateReduksilima')->name('updatemlima');

//route reduksi m6
Route::get('/tampilReduksienam', 'ReduksiController@tampilReduksienam')->name('tampilReduksienam');
Route::get('/createM6', 'ReduksiController@createmenam')->name('createmenam');
Route::post('/tambahReduksienam', 'ReduksiController@tambahReduksienam')->name('tambahReduksienam');

Route::get('/editmenam/{id}', 'ReduksiController@editmenam')->name('editmenam');
Route::patch('/updatemenam/{id}', 'ReduksiController@updateReduksienam')->name('updatemenam');

//route reduksi falsePositive
Route::get('/tampilReduksifalsePositive', 'ReduksiController@tampilReduksifalsePositive')->name('tampilReduksifalsePositive');

Route::get('/createfalsePositive', 'ReduksiController@createfalsePositive')->name('createfalsePositive');

Route::post('/tambahReduksifalsePositive', 'ReduksiController@tambahReduksifalsePositive')->name('tambahReduksifalsePositive');

Route::get('/editfalsePositive{id}', 'ReduksiController@editfalsePositive')->name('editfalsePositive');
Route::patch('/updatefalsePositive/{id}', 'ReduksiController@updateReduksifalsePositive')->name('updatefalsePositive');


//route reduksi falseNegative
Route::get('/tampilReduksifalseNegative', 'ReduksiController@tampilReduksifalseNegative')->name('tampilReduksifalseNegative');

Route::get('/createfalseNegative', 'ReduksiController@createfalseNegative')->name('createfalseNegative');

Route::post('/tambahReduksifalseNegative', 'ReduksiController@tambahReduksifalseNegative')->name('tambahReduksifalseNegative');

Route::get('/editfalseNegative{id}', 'ReduksiController@editfalseNegative')->name('editfalseNegative');
Route::patch('/updatefalseNegative/{id}', 'ReduksiController@updateReduksifalseNegative')->name('updatefalseNegative');

//route LK

Route::get('/tampilReduksilk', 'ReduksiController@tampilReduksilk')->name('tampilReduksilk');

Route::get('/createlk', 'ReduksiController@createlk')->name('createlk');

Route::post('/tambahReduksilk', 'ReduksiController@tambahReduksilk')->name('tambahReduksilk');

Route::get('/editlk{id}', 'ReduksiController@editlk')->name('editlk');
Route::patch('/updatelk/{id}', 'ReduksiController@updateReduksilk')->name('updatelk');







Route::get('/home', 'HomeController@index');
Route::group(['middleware' => ['auth','checkRole:0']], function(){
    Route::get('/userguru/data','UserController@dataGuru')->name('userguruData');
    Route::get('/userguru/create','UserController@createGuru')->name('userguruCreate');
    Route::post('/userguru/store','UserController@storeGuru')->name('userguruStore');
    Route::get('/usersiswa/data','UserController@dataSiswa')->name('usersiswaData');
    Route::get('/usersiswa/create','UserController@createSiswa')->name('usersiswaCreate');
    Route::post('/usersiswa/store','UserController@storeSiswa')->name('usersiswaStore');
    Route::get('/panduan-guru','UserController@panduanGuru')->name('panduanGuru');
    Route::post('/panduan-guru/store','UserController@storepanduanGuru')->name('panduanguruStore');
    Route::get('/panduan-siswa','UserController@panduanSiswa')->name('panduanSiswa');
    Route::post('/panduan-siswa/store','UserController@storepanduanSiswa')->name('panduansiswaStore');
});

Route::group(['middleware' => ['auth','checkRole:1'],'prefix'=>'guru'], function(){
    // Route::get('/home', 'HomeController@index');
   
    Route::get('/profil','ProfilController@profilGuru')->name('profilGuru');
    Route::post('/profil','ProfilController@storeProfilGuru')->name('storeProfilGuru');
    Route::get('/edit','ProfilController@editProfilGuru')->name('editProfilGuru');
    Route::patch('/update','ProfilController@updateProfilGuru')->name('updateProfilGuru');
    Route::group(['prefix' => 'paketsoal'], function () {
        Route::get('/','PaketSoalController@getPaketSoal')->name('getPaketSoal');
        Route::get('/create','PaketSoalController@createPaketSoal')->name('createPaketSoal');
        Route::post('/','PaketSoalController@storePaketSoal')->name('storePaketSoal');
        Route::get('/{id}','PaketSoalController@soalSatuan')->name('soalSatuan');
        Route::get('/delete/{id}','PaketSoalController@deletePaketSoal')->name('deletePaketSoal');
        Route::group(['prefix' => 'soal_satuan'], function () {
            Route::post('/','PaketSoalController@storeSoalSatuan')->name('storeSoalSatuan');
            Route::get('/{id}','PaketSoalController@soalTingkat')->name('soalTingkat');
            //Soal Tk1
            Route::post('/soal_tk1','PaketSoalController@storeSoalTk1')->name('storeSoalTk1');
            Route::patch('/soal_tk1/{paket_soal_id}/update','PaketSoalController@updateSoalTk1', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk1');
            //Soal Tk2
            Route::post('/soal_tk2','PaketSoalController@storeSoalTk2')->name('storeSoalTk2');
            Route::patch('/soal_tk2/{paket_soal_id}/update','PaketSoalController@updateSoalTk2', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk2');
            //Soal Tk3
            Route::post('/soal_tk3','PaketSoalController@storeSoalTk3')->name('storeSoalTk3');
            Route::patch('/soal_tk3/{paket_soal_id}/update','PaketSoalController@updateSoalTk3', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk3');
            //Soal Tk4
            Route::post('/soal_tk4','PaketSoalController@storeSoalTk4')->name('storeSoalTk4');
            Route::patch('/soal_tk4/{paket_soal_id}/update','PaketSoalController@updateSoalTk4', ['$paket_soal_id' =>'paket_soal_id'])->name('updateSoalTk4');

        });
    });
    Route::group(['prefix' => 'kelas'], function () {
        Route::get('/','KelasController@getKelas')->name('getKelas');
        Route::get('/create','KelasController@createKelas')->name('createKelas');
        Route::post('/','KelasController@storeKelas')->name('storeKelas');
        Route::get('/{id}','KelasController@showKelas')->name('showKelas');
        Route::get('/delete/{id}','KelasController@deleteKelas')->name('deleteKelas');
    });
    Route::group(['prefix' => 'ujian'], function () {
        Route::get('/','UjianController@getUjian')->name('getUjian');


 // penambahan data baru
  Route::group(['prefix' => 'pesan'], function () {
        Route::get('/','pesanController@getPesan')->name('getPesan');
        Route::get('/create','pesanController@createPesan')->name('createPesan');
        Route::post('/','pesanController@storePesan')->name('storePesan');
     //   Route::get('/{id}','pesanController@showKelas')->name('showKelas');
    //    Route::get('/delete/{id}','pesanController@deleteKelas')->name('deleteKelas');
         });
// akhir penambahan data baru
        Route::get('/create','UjianController@createUjian')->name('createUjian');

        Route::post('/','UjianController@storeUjian')->name('storeUjian');
        Route::get('/{id}','UjianController@showUjian')->name('showUjian');
        Route::patch('/update','UjianController@updateUjian')->name('updateUjian');
        Route::get('/delete/{id}','UjianController@deleteUjian')->name('deleteUjian');
        Route::get('/hasil/persiswa/{id}','UjianController@showHasilUjianPersiswa')->name('showHasilUjianPersiswa');
        Route::get('/hasil/persoal/{ujian_id}/{id}/{nomor}','UjianController@showHasilUjianPersoal', ['$id'=>'id','$ujian_id' =>'ujian_id'])->name('showHasilUjianPersoal');
        Route::get('/{id}/miskonsepsi/{miskonsepsi_id}','UjianController@detailMiskonsepsi')->name('detailMiskonsepsi');
    });

    Route::get('/export/{id}','UjianController@exportExcelHasil')->name('exportExcelHasil');

});

Route::group(['middleware' => ['auth','checkRole:2'],'prefix'=>'siswa'], function(){
    // Route::get('/home', 'HomeController@index');
    Route::get('/profil','ProfilController@profilSiswa')->name('profilSiswa');
    Route::post('/profil','ProfilController@storeProfilSiswa')->name('storeProfilSiswa');
    Route::get('/edit','ProfilController@editProfilSiswa')->name('editProfilSiswa');
    Route::patch('/update','ProfilController@updateProfilSiswa')->name('updateProfilSiswa');
    Route::group(['prefix' => 'kelas'], function () {
        Route::get('/','KelasController@getKelasSiswa')->name('getKelasSiswa');
        Route::post('/gabungkelas','KelasController@gabungKelasSiswa')->name('gabungKelasSiswa');
        Route::get('/show/{id}','KelasController@showKelasSiswa')->name('showKelasSiswa');
        Route::get('/hasilujian/{id}','KelasController@hasilUjian')->name('hasilUjian');
        Route::get('/hasilujian/falsenegative/{id}','KelasController@videoFalseNegative')->name('falseNegative');
        
        Route::get('/hasilujian/falsepositive/{id}','KelasController@videoFalsePositve')->name('falsePositive');

        Route::get('/hasilujian/lackofknowladge/{id}','KelasController@videoLackOfKnowladge')->name('LackOfKnowladge');

        
        Route::get('/hasilujian/miskonsepsi/{id}','KelasController@videoMiskonsepsi')->name('miskonsepsi');
        Route::get('/hasilujian/miskonsepsiSatu/{id}','KelasController@videoMiskonsepsi1')->name('miskonsepsiSatu');
        Route::get('/hasilujian/miskonsepsiDua/{id}','KelasController@videoMiskonsepsi2')->name('miskonsepsiDua');
        Route::get('/hasilujian/miskonsepsiTiga/{id}','KelasController@videoMiskonsepsi3')->name('miskonsepsiTiga');
        Route::get('/hasilujian/miskonsepsiEmpat/{id}','KelasController@videoMiskonsepsi4')->name('miskonsepsiEmpat');
        Route::get('/hasilujian/miskonsepsiLima/{id}','KelasController@videoMiskonsepsi5')->name('miskonsepsiLima');
        Route::get('/hasilujian/miskonsepsiEnam/{id}','KelasController@videoMiskonsepsi6')->name('miskonsepsiEnam');


        //Lanjut Disini
    });
    Route::group(['prefix' => 'ujian'], function () {
        Route::get('/','UjianController@getUjianSiswa')->name('getUjianSiswa');
        Route::get('/UpdateUjian/{id}','UjianController@UpdateUjianSiswa')->name('UpdateUjianSiswa');
        Route::get('/room/{id}','UjianController@runUjian')->name('runUjian');
        Route::get('/finish/{id}','UjianController@finishUjian')->name('finishUjian');
    });

});

Route::get('pagination/fetch_data', 'UjianController@fetch_data');
Route::get('store/jawaban_tk1', 'UjianController@storeJawabanTk1');
Route::get('store/jawaban_tk2', 'UjianController@storeJawabanTk2');
Route::get('store/jawaban_tk3', 'UjianController@storeJawabanTk3');
Route::get('store/jawaban_tk4', 'UjianController@storeJawabanTk4');
Route::get('store/hasil_ujian', 'UjianController@storeHasilUjian');

