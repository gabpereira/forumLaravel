<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\ThemeController;


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

Route::resource('opinions', OpinionController::class);
Route::resource('opinions', ReferenceController::class);
Route::resource('opinions', RoleController::class);
Route::resource('opinions', StateController::class);
Route::resource('opinions', ThemeController::class);