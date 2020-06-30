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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',"EmployeeController@index");
Route::get('/edit/{id}',"EmployeeController@edit");

Route::get('/show/{id}',"EmployeeController@show");
Route::get('/create',"EmployeeController@create");
Route::post('/store',"EmployeeController@store");
Route::get('/delete/{id}',"EmployeeController@destroy");
Route::post('/update/{id}',"EmployeeController@update");
