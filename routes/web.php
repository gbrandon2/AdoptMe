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

Route::get('/', 'PostController@index');
Route::post('/addPet','PostController@storePet')->name('addPet');
Route::post('/addAcc','PostController@storeAcc')->name('addAcc');
Route::post('/addServ','PostController@storeServ')->name('addServ');
Route::post('/addEv','PostController@storeEv')->name('addEv');
Route::get('/search','PostController@searchPets');
Route::get('/Petinfo','PostController@petInfo');
Route::post('/saveSurvey/{id}', 'PostController@saveSurvey');
Route::get('/newOwner/{id}/{emailn}', 'PostController@newOwner');
