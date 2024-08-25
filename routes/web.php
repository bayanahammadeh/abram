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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/navbar', [App\Http\Controllers\MenuController::class, 'navbar']);
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'services']);
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'projects']);



Route::get('about', [App\Http\Controllers\AboutController::class, 'index']);
//Route::get('about', [App\Http\Controllers\MenuController::class, 'index']);