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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fleet', 'FleetController@index')->name('fleet');
Route::post('/fleet', 'FleetController@store')->name('fleet');
Route::get('/fleet/show/{id}', 'FleetController@show');


Route::get('/inspectionofficer', 'InspectionofficerController@index');
//Route::post('/inspectionofficer', 'InspectionofficerController@store');
