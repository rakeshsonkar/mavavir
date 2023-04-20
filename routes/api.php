<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\FrontendController;



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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login',[AuthController::class, 'login']);
Route::post('forgetPassword',[AuthController::class, 'forgetPassword']);
Route::post('update/profile',[AuthController::class, 'updateProfile']);
Route::post('menugetcategory',[FrontendController::class, 'menugetcategory']);
Route::post('menugetsubcategory',[FrontendController::class, 'menugetsubcategory']);
Route::post('menugetproduct',[FrontendController::class, 'menugetproduct']);










