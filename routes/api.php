<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
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



Route::group(['middleware'=>"auth:sanctum"],function(){

         Route::get('all',[ArticleController::class,"all"]);
         Route::get('all_for_mobile',[ArticleController::class,"all_for_mobile"]);
         Route::get('show/{id}',[ArticleController::class,"show"]);
         Route::delete('destroy/{id}',[ArticleController::class,"destroy"]);
         Route::post('store',[ArticleController::class,"store"]);
         Route::put('update/{id}',[ArticleController::class,"update"]);

         Route::get('check',[AuthController::class,"verify_token"]);

         Route::get('logout',[AuthController::class,'logout']);
     });



    Route::post('register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);