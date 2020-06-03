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

Route::get('/upload', 'PostController@upload');
Route::post('/addPet','PostController@storePet')->name('addPet');
Route::post('/addAcc','PostController@storeAcc')->name('addAcc');
Route::post('/addServ','PostController@storeServ')->name('addServ');
Route::post('/addEv','PostController@storeEv')->name('addEv');
Route::get('/search','PostController@searchPets');
Route::get('/Petinfo','PostController@petInfo');
Route::get('/','PostController@index');
Route::post('/saveSurvey/{id}', 'PostController@saveSurvey');
Route::get('/newOwner/{id}/{emailn}', 'PostController@newOwner');
Route::get('/user','PostController@user');
Route::get('/accesorio','PostController@searchAcc');
Route::get('/accesoryinfo','PostController@accInf');
Route::get('/servicio','PostController@serv');
Route::get('/evento','PostController@searchEv');
Route::get('/evtInfo','PostController@evtInf');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
