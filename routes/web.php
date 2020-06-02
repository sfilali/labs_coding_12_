<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     $class = "active";
//     return view('accueil', compact("class"));
// });
Route::get('/', 'AccueilController@index');
Route::get('/services', 'ServiceController@index');

// Route::resource('accueil', 'AccueilController');
// Route::resource('service', 'ServiceController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

