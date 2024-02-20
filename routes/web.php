<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::get('/portfolio', 'PortfolioController@index');
Route::get('/admin/portfolio', 'PortfolioController@admin');
Route::get('/admin/portfolio/create', 'PortfolioController@create');
Route::get('/admin/portfolio/update', 'PortfolioController@update');
Route::get('/admin/portfolio/delete', 'PortfolioController@delete');
Route::get('/admin/portfolio/first_or_create', 'PortfolioController@firstOrCreate');
Route::get('/admin/portfolio/update_or_create', 'PortfolioController@updateOrCreate');
