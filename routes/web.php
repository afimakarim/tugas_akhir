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

 Route::get('/home', 'HomeController@index');
 Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
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
    Route::get('/', 'adminPusatController@index')->name('pusat.dashboard');
    Route::get('/logout', 'Auth\LoginController@logout')->name('pusat.logout');


    Route::get('/userAdminDealer','adminPusatController@userAdminDealer')->name('pusat.dealer');
    Route::post('/userAdminPusat','adminPusatController@store3')->name('pusat.dealer.store3');
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
    Route::get('/promo','adminDealerController@promo')->name('dealer.promo');
    Route::get('/editPromo','adminDealerController@editPromo')->name('dealer.promo.edit');
    Route::get('/profileDealer','adminDealerController@profileDealer')->name('dealer.profile');
    Route::get('/editPofileDealer','adminDealerController@editProfileDealer')->name('dealer.profile.edit');

    // Password Reset routes
    Route::post('/password/email', 'Auth\DealerForgotPasswordController@sendResetLinkEmail')->name('dealer.password.email');
    Route::get('/password/reset', 'Auth\DealerForgotPasswordController@showLinkRequestForm')->name('dealer.password.request');
    Route::post('/password/reset', 'Auth\DealerResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\DealerResetPasswordController@showResetForm')->name('dealer.password.reset');
});
