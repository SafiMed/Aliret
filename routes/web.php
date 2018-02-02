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
    return view('welcome');
});

Auth::routes();

Route::get('/verses', function(){
	return view('nav-item.verses');
});
Route::get('/inheritance-calculator', 'HeirController@index');
Route::get('/forum', function(){
	return redirect('http://127.0.0.1:8800/inheritance-calculator');
});
