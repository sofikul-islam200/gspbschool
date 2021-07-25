<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//============setup management =====================//
//=============== class ============================//
Route::get('student/class/info','setup_manage\ClassController@__classView')->name('class.view');
Route::post('student/class/add','setup_manage\ClassController@__addClass')->name('class.add');