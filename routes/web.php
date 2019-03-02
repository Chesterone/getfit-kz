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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/advice', 'PagesController@advice');
Route::get('/unhealthy', 'PagesController@unhealthy');

Route::resource('recipes', 'RecipesController');

Route::get('menu/{menu_id}', 'RecipesController@showMenu');