<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'App\Http\Controllers\AdminController@index')->name('raiz');
Route::get('locale/{lang}', 'App\Http\Controllers\LocalizationController@index');
Route::get('/welcome', 'App\Http\Controllers\AdminController@welcome')->name('welcome');
Route::get('/services', 'App\Http\Controllers\AdminController@services')->name('services');
Route::get('/our', 'App\Http\Controllers\AdminController@our')->name('our');
Route::get('/ourClients', 'App\Http\Controllers\AdminController@ourClients')->name('ourClients');
Route::get('/blog', 'App\Http\Controllers\AdminController@blog')->name('blog');