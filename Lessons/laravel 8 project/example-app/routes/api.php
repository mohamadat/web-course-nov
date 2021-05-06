<?php

use App\Http\controllers\TechController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('techs',[TechController::class,'index']);
Route::get('techs/{id}',[TechController::class,'show']);

Route::post('techs',[TechController::class,'store']);
Route::put('techs/{id}',[TechController::class,'update']);
Route::delete('techs/{id}',[TechController::class,'destroy']);
