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
    return view('mainpage.main');
})->name('welcome');
Route::get('/user', function () {
    return view('users.user');
})->name('register');
// Route::get('/userLogin', function () {
//     return view('userLogin');
// })->name('userLogin');
//Route::get('/userLogin', 'UserController@check');
Route::group(['prefix' => '/userLogin'], function(){
    Route::get('/', function(){
        return view('users.userLogin');
    })->name('userLogin');
    Route::post('/', 'UserController@check')->name('check');
});

Route::resource('users','UserController');