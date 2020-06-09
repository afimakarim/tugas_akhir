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

 Route::get('/home', 'HomeController@index');
 Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
//super Admin
 Route::prefix('superAdmin')->group (function() {
     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
     Route::get('/', 'superAdminController@index')->name('admin.dashboard');
     Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
     Route::get('/userAdminPusat','superAdminController@userAdminPusat')->name('admin.pusat');
     Route::get('/editUserAdminPusat','superAdminController@editUserAdminPusat')->name('admin.pusat.edit');
     Route::get('/merek','superAdminController@merek')->name('admin.merek');
     Route::post('/merek', 'superAdminController@store')->name('admin.merek.store');
     Route::get('/editMerek','superAdminController@editMerek')->name('admin.merek.edit');

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
    Route::get('/editUserAdminPusat','adminPusatController@editUserAdminPusat')->name('pusat.dealer.edit');
    Route::get('/dataMotor','adminPusatController@dataMotor')->name('pusat.motor');
    Route::get('/editDataMotor','adminPusatController@editDataMotor')->name('pusat.motor.edit');

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
