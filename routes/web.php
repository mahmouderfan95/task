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

// Route::get('/', function () {
//     return view('welcome');
// });

/* frontEnd routes */
Route::group(['namespace'=>'frontEnd'],function(){
    // Route::get('/register','registerController@register')->name('register');
    Route::get('/register/company','companyController@getRegister')->name('companyRegister');
    Route::post('/register/company','companyController@companyPostRegister')->name('postCompanyRegister');
    Route::get('/register/employe','employeController@getRegister')->name('employeRegister');
    Route::post('/register/employe','employeController@employePostRegister')->name('postEmployeRegister');
    Route::get('login/company','registerController@getLoginCompany')->name('getLoginCompany');
    Route::post('login/company','registerController@companyLogin')->name('comapnylogin');
    Route::get('login/employe','registerController@getLoginEmploye')->name('getLoginEmploye');
    Route::post('login/employe','registerController@employeLogin')->name('employeLogin');
    Route::get('/welcome/employe/{id}','registerController@welcomeEmploye')->name('welcomeEmploye');
    Route::get('/welcome/{id}','registerController@welcomeCompany')->name('welcomeCompany')->middleware('auth');
});


/* frontEnd routes */
