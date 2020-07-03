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
});

 //percobaan
Auth::routes();
// Auth::routes(["register" => false]);
// Auth::routes(["except" => "register"]);

// Route::get('/home', 'HomeController@index');
// Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


//User
Route::get('/cariMotor','UserController@cariMotor')->name('user.cariMotor');
Route::get('/detailMotor','UserController@detailMotor')->name('user.detailMotor');
Route::get('/anggaranMotor','UserController@anggaranMotor')->name('user.anggaranMotor');

Route::get('/dealerMotor','UserController@dealerMotor')->name('user.dealerMotor');
Route::get('/detailDealer','UserController@detailDealer')->name('user.detailDealer');

Route::get('/detailPromo','UserController@detailPromo')->name('user.detailPromo');

Route::get('/infoSPK','UserController@infoSPK')->name('user.infoSPK');
Route::get('/SPK-Nama','UserController@spk')->name('user.spk');
Route::get('/SPK-Pilih','UserController@spk2')->name('user.spk2');
Route::get('/SPK-Kriteria','UserController@spk3')->name('user.spk3');
Route::get('/hasil-SPK','UserController@hasilSPK')->name('user.spk.hasil');

//super Admin
 Route::prefix('superAdmin')->group (function() {
     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
     Route::get('/', 'superAdminController@index')->name('admin.dashboard');
     Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

     Route::get('/userAdminPusat','superAdminController@userAdminPusat')->name('admin.pusat');
     Route::post('/userAdminPusat','superAdminController@store2')->name('admin.pusat.store2');
     Route::get('/{user}/editUserAdminPusat','superAdminController@editUserAdminPusat')->name('admin.pusat.edit');
     Route::post('/{user}/editUserAdminPusat','superAdminController@updateUserAdminPusat')->name('admin.pusat.update');
     Route::get('/{user}/deleteUserAdminPusat','superAdminController@destroy2')->name('admin.pusat.delete');

     Route::get('/merek','superAdminController@merek')->name('admin.merek');
     Route::post('/merek', 'superAdminController@store')->name('admin.merek.store');
     Route::get('/{merek}/editMerek','superAdminController@editMerek')->name('admin.merek.edit');
     Route::post('/{merek}/editMerek', 'superAdminController@updateMerek')->name('admin.merek.update');
     Route::get('/{merek}/deleteMerek', 'superAdminController@destroy')->name('admin.merek.delete');

     Route::get('/jenis','superAdminController@jenis')->name('admin.jenis');
     Route::post('/jenis', 'superAdminController@store5')->name('admin.jenis.store5');
     Route::get('/{jenis}/editJenis','superAdminController@editJenis')->name('admin.jenis.edit');
     Route::post('/{jenis}/editJenis', 'superAdminController@updateJenis')->name('admin.jenis.update');
     Route::get('/{jenis}/deleteJenis', 'superAdminController@destroy5')->name('admin.jenis.delete');

     Route::get('/nilai','superAdminController@nilai')->name('admin.nilai');
     Route::post('/nilai', 'superAdminController@store8')->name('admin.nilai.store8');
     Route::get('/{nilai}/editNilai','superAdminController@editNilai')->name('admin.nilai.edit');
     Route::post('/{nilai}/editNilai', 'superAdminController@updateNilai')->name('admin.nilai.update');
     Route::get('/{nilai}/deleteNilai', 'superAdminController@destroy8')->name('admin.nilai.delete');

     Route::get('/kriteria','superAdminController@kriteria')->name('admin.kriteria');
     Route::post('/kriteria', 'superAdminController@store9')->name('admin.kriteria.store9');
     Route::get('/{kriteria}/editkriteria','superAdminController@editKriteria')->name('admin.kriteria.edit');
     Route::post('/{kriteria}/editKriteria', 'superAdminController@updateKriteria')->name('admin.kriteria.update');
     Route::get('/{kriteria}/deleteKriteria', 'superAdminController@destroy8')->name('admin.kriteria.delete');

     Route::get('/alternatif','superAdminController@alternatif')->name('admin.alternatif');
     Route::post('/alternatif', 'superAdminController@store10')->name('admin.kriteria.store10');

     Route::get('/bobot','superAdminController@bobot')->name('admin.bobot');
     Route::post('/bobot', 'superAdminController@store11')->name('admin.bobot.store11');
     Route::get('/editBobot','superAdminController@editBobot')->name('admin.bobot.edit');
     Route::post('/{bobot}/editBobot', 'superAdminController@updateBobot')->name('admin.bobot.update');
     Route::get('/{bobot}/deleteBobot', 'superAdminController@destroy11')->name('admin.bobot.delete');

     Route::get('/perangkingan','superAdminController@perangkingan')->name('admin.perangkingan');
     Route::post('/perangkingan', 'superAdminController@store12')->name('admin.perangkingan.store12');

     Route::get('/pengunjung','superAdminController@pengunjung')->name('admin.pengunjung');
     Route::post('/pengunjung', 'superAdminController@store13')->name('admin.pengunjung.store13');

     // Password Reset routes
     Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
     Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
     Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
     Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
 });

//Pusat
 Route::prefix('pusat')->group (function() {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('pusat.login');
    Route::post('/login', 'Auth\LoginController@login')->name('pusat.login.submit');
    Route::get('/logout', 'Auth\LoginController@logout')->name('pusat.logout');

    Route::get('/', 'adminPusatController@profilePusat')->name('pusat.profile');
    Route::get('/{user}/editPofilePusat','adminPusatController@editProfilePusat')->name('pusat.profile.edit');
    Route::post('/{user}/editPofilePusat','adminPusatController@updateProfilePusat')->name('pusat.profile.update');

    Route::get('/userAdminDealer','adminPusatController@userAdminDealer')->name('pusat.dealer');
    Route::post('/userAdminDealer','adminPusatController@store3')->name('pusat.dealer.store3');
    Route::get('/{dealer}/editUserAdminDealer','adminPusatController@editUserAdminDealer')->name('pusat.dealer.edit');
    Route::post('/{dealer}/editUserAdminDealer','adminPusatController@updateUserAdminDealer')->name('pusat.dealer.update');
    Route::get('/{dealer}/deleteUserAdminDealer','adminPusatController@destroy3')->name('pusat.dealer.delete');


    Route::get('/dataMotor','adminPusatController@dataMotor')->name('pusat.motor');
    Route::post('/dataMotor','adminPusatController@store4')->name('pusat.motor.store4');
    Route::get('/{motor}/editDataMotor','adminPusatController@editDataMotor')->name('pusat.motor.edit');
    Route::post('/{motor}/editDataMotor','adminPusatController@updateDataMotor')->name('pusat.motor.update');
    Route::get('/{motor}/deleteDataMotor','adminPusatController@destroy4')->name('pusat.motor.delete');

});


//dealer
Route::prefix('dealer')->group (function() {
    Route::get('/login', 'Auth\DealerLoginController@showLoginForm')->name('dealer.login');
    Route::post('/login', 'Auth\DealerLoginController@login')->name('dealer.login.submit');
    Route::get('/', 'adminDealerController@index')->name('dealer.dashboard');
    Route::get('/logout', 'Auth\DealerLoginController@logout')->name('dealer.logout');

    Route::get('/profileDealer','adminDealerController@profileDealer')->name('dealer.profile');
    Route::get('/{dealer}/editPofileDealer','adminDealerController@editProfileDealer')->name('dealer.profile.edit');
    Route::post('/{dealer}/editPofileDealer','adminDealerController@updateProfileDealer')->name('dealer.profile.update');

    Route::get('/promo','adminDealerController@promo')->name('dealer.promo');
    Route::post('/promo','adminDealerController@store7')->name('dealer.promo.store7');
    Route::get('/{promo}/editPromo','adminDealerController@editPromo')->name('dealer.promo.edit');
    Route::post('/{promo}/editPromo','adminDealerController@updatePromo')->name('dealer.promo.update');
    Route::get('/{promo}/deletePromo','adminDealerController@destroy7')->name('dealer.promo.delete');

    Route::get('/rangking','adminDealerController@rangking')->name('dealer.rangking');
    Route::post('/rangking','adminDealerController@store14')->name('dealer.rangking.store14');
    Route::get('/{alternatif}/editRangking','adminDealerController@editRangking')->name('dealer.rangking.edit');
    Route::post('/{alternatif}/editRangking','adminDealerController@updateRangking')->name('dealer.rangking.update');
    Route::get('/{alternatif}/deleteRangking','adminDealerController@destroy14')->name('dealer.rangking.delete');



    // Password Reset routes
    Route::post('/password/email', 'Auth\DealerForgotPasswordController@sendResetLinkEmail')->name('dealer.password.email');
    Route::get('/password/reset', 'Auth\DealerForgotPasswordController@showLinkRequestForm')->name('dealer.password.request');
    Route::post('/password/reset', 'Auth\DealerResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\DealerResetPasswordController@showResetForm')->name('dealer.password.reset');
});

