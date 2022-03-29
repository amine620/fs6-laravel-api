<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('all',[ArticleController::class,"all"]);
Route::get('show/{id}',[ArticleController::class,"show"]);
Route::delete('destroy/{id}',[ArticleController::class,"destroy"]);
Route::post('store',[ArticleController::class,"store"]);