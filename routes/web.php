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

$controlers = 'App\Http\Controllers';


Route::get('/', $controlers.'\PagesController@index');

Route::get('about',$controlers.'\PagesController@about');

Route::get('services',$controlers.'\PagesController@services');