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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/dashboard','AdminController@index')->name('admin.dashboard');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('/invite/password/{token}/{id}', ['as' => 'newpasswordsetup', 'uses' => 'Admin\PasswordSetupController@setPassInvitationView']);
Route::post('/invite/password/setnewpassword', ['as' => 'setnewpassword', 'uses' => 'Admin\PasswordSetupController@setNewPassword']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    /***************** Dashboard *************************/
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
    /******************** User Dev : Dilip 15-06 ***********************/
    Route::resource('companies', 'Admin\CompanyController');
    Route::group(['prefix' => 'companies', 'as' => 'companies.'], function () {
        Route::post('getall', ['as' => 'getall', 'uses' => 'Admin\CompanyController@getall']);
        Route::post('getmodal', ['as' => 'getmodal', 'uses' => 'Admin\CompanyController@getmodal']);
        Route::post('changestatus', ['as' => 'changestatus', 'uses' => 'Admin\CompanyController@changestatus']);
        
    });
});

Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
    /***************** Dashboard *************************/
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    /******************** User Dev : Dilip 15-06 ***********************/
});