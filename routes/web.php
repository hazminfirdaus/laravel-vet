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
    return view('welcome');
});

Route::get('/homepage', 'HomepageController@index')->name('homepage.index');

Route::get('/searchpage', 'SearchpageController@index')->name('searchpage.index');

Route::get('/clients', 'ClientController@index')->name('clients.index');

Route::get('/pets', 'PetController@index')->name('pets.index');


