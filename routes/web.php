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





Auth::routes();

Route::get('/home', 'TicketController@index')->name('home');
Route::resource('ticket','TicketController');//to go to create ticket page
Route::get('/ticket', 'TicketController@show');//To show the tickets created by the user
Route::post('/ticket', 'TicketController@store');
/*----------------------------Guest Routes-------------------------------*/
