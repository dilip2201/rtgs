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


/******************************* Invite User ****************************/
Route::get('/invite/password/{token}', ['as' => 'newpasswordsetup', 'uses' => 'Admin\PasswordSetupController@setPassInvitationView']);
Route::post('/invite/password/setnewpassword', ['as' => 'setnewpassword', 'uses' => 'Admin\PasswordSetupController@setNewPassword']);


Route::get('admin/dashboard','AdminController@index')->name('admin.dashboard');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('profile', ['as' => 'profile', 'uses' => 'Admin\ProfileController@index']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'Admin\LoginController@logout']);

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

Route::group(['middleware' => ['checkactivestatus']], function () {
Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
    /***************** Dashboard *************************/
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::post('loaddashboard', ['as' => 'loaddashboard', 'uses' => 'DashboardController@loadDashboard']);
    /******************** User Dev : Dilip 15-06 ***********************/


    Route::group(['namespace' => 'Company'], function () {
        Route::group(['middleware' => ['check-permission:company']], function () {
            Route::get('users', ['as' => 'users', 'uses' => 'UserController@user']);
            Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
                Route::post('getmodal', ['as' => 'getmodal', 'uses' => 'UserController@getmodal']);
                Route::post('store', ['as' => 'store', 'uses' => 'UserController@store']);
                Route::post('getall', ['as' => 'getall', 'uses' => 'UserController@getall']);
                Route::post('changestatus', ['as' => 'changestatus', 'uses' => 'UserController@changestatus']);
                Route::delete('delete/{id}', ['as' => 'delete', 'uses' => 'UserController@destroy']);
            });
        });

        Route::get('benificiaries', ['as' => 'benificiaries', 'uses' => 'BenificiariesController@index']);
        Route::group(['prefix' => 'benificiaries', 'as' => 'benificiaries.'], function () {
            Route::post('getmodal', ['as' => 'getmodal', 'uses' => 'BenificiariesController@getmodal']);
            Route::get('create', ['as' => 'create', 'uses' => 'BenificiariesController@create']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'BenificiariesController@create']);
            Route::post('store', ['as' => 'store', 'uses' => 'BenificiariesController@store']);
            Route::post('getall', ['as' => 'getall', 'uses' => 'BenificiariesController@getall']);
            Route::post('changestatus', ['as' => 'changestatus', 'uses' => 'BenificiariesController@changestatus']);
            Route::delete('delete/{id}', ['as' => 'delete', 'uses' => 'BenificiariesController@destroy']);
            Route::get('show/{id}', ['as' => 'show', 'uses' => 'BenificiariesController@show']);
            Route::post('pincode', ['as' => 'pincode', 'uses' => 'BenificiariesController@pincode']);
            Route::post('ifsccode', ['as' => 'ifsccode', 'uses' => 'BenificiariesController@ifsccode']);
        });

        Route::group(['prefix' => 'form', 'as' => 'form.'], function () {
            Route::get('create', ['as' => 'create', 'uses' => 'FormController@create']);
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'FormController@create']);
            Route::post('getdata', ['as' => 'getdata', 'uses' => 'FormController@getdata']);
            Route::post('getdatabenificiaries', ['as' => 'getdatabenificiaries', 'uses' => 'FormController@getdatabenificiaries']);
            Route::post('store', ['as' => 'store', 'uses' => 'FormController@store']);
            Route::get('formpdf/{id}', ['as' => 'formpdf', 'uses' => 'FormController@formpdf']);
            
        });

        Route::get('transaction', ['as' => 'transaction', 'uses' => 'TransactionController@index']);
        Route::group(['prefix' => 'transaction', 'as' => 'transaction.'], function () {
            Route::post('getall', ['as' => 'getall', 'uses' => 'TransactionController@getall']);
            Route::delete('delete/{id}', ['as' => 'delete', 'uses' => 'TransactionController@destroy']);
            Route::post('getmodal', ['as' => 'getmodal', 'uses' => 'TransactionController@getmodal']);
        });
    });


});
});

Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);
Route::post('changepswrd', ['as' => 'changepswrd', 'uses' => 'ProfileController@changepassword']);
Route::post('remove_profile', ['as' => 'remove_profile', 'uses' => 'ProfileController@remove_profile']);
Route::post('profileupdt', ['as' => 'profileupdt', 'uses' => 'ProfileController@profileupdate']);
Route::post('/admin/profileupdate', ['as' => 'profileupdate', 'uses' => 'Admin\ProfileController@profileupdate']);
Route::post('/changepassword', ['as' => 'changepassword', 'uses' => 'Admin\ProfileController@changepassword']);

