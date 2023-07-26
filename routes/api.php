<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/websites/{website}/subscribe', 'App\Http\Controllers\SubscriptionController@store');
Route::post('/websites/{website}/posts', 'App\Http\Controllers\PostController@store');
