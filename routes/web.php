<?php
use Illuminate\Support\Facades\DB;
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
    return view('index');
});

// homestay menu\

Route::get('/listHomestay/{campus}','MapController@indexHomestay');
Route::get('/listHomestay','MapController@listHomestay');
Route::get('/detailhomestay/{id}','MapController@detailHomestay');
Route::get('/typeOfHouse/{list}','Dropdown@typeOfHomestay');
Route::get('/typeOfCity/{list}','Dropdown@typeOfCity');
Route::get('/typeOfPriceRange/{list}','Dropdown@typeOfPriceRange');
Route::get('/typeOfTimeRange/{list}','Dropdown@typeOfTimeRange');

// job menu
Route::get('/listJob/{campus}','MapController@Job');
Route::get('/listJob','MapController@listJob');
Route::get('/detailJob/{id}','MapController@detailJob');
Route::get('/jobType/{list}','Dropdown@typeOfJob');
Route::get('/jobTypeOfCity/{list}','Dropdown@typeOfCityJob');
Route::get('/jobTypeOfEducation/{list}','Dropdown@typeOfEducationJob');
Route::get('/jobTypeOfField/{list}','Dropdown@typeOfFieldJob');
Route::get('/jobTypeOfSalary/{list}','Dropdown@typeOfSalaryJob');

// tourism
Route::get('/listVacay/{campus}','MapController@vacation');
Route::get('/listVacay','MapController@listVacay');
Route::get('/detailVacay/{id}','MapController@detailVacay');
Route::get('/vacayType/{list}','Dropdown@typeOfVacay');
Route::get('/vacayTypeOfCity/{list}','Dropdown@typeOfCityVacay');
