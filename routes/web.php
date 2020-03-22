<?php

use Illuminate\Support\Facades\Route;

// log in my manually created user in the database
auth()->loginUsingId(1);

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

Route::get('/reports', function () {
    return 'Secret reports';
})->middleware('can:view_reports');