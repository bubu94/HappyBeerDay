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
    return view('pages.birra');
});

Route::get('/beer', 'BeerControllers@casualBeer')->name("birra");

Route::any('/api.possoguidare','BeerControllers@guidaSicura');

Route::any('/api.guida','BeerControllers@api_guida');

Route::any('/api.getBeerValue','BeerControllers@getBeerValue');
