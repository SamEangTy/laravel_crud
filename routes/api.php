<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
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

Route::get('/get-all-pro',[Product::class, 'index'] );
Route::post('/login',[AuthController::class, 'login'] );

Route::middleware('auth:sanctum')->group(function(){
    
    Route::get('/get-one-pro/{id}',[Product::class, 'getOnePro'] );
    Route::post('/add-pro',[Product::class, 'addPro'] );
    Route::put('/update-pro/{id}',[Product::class, 'updatePro'] );
    Route::delete('/delete-pro/{id}',[Product::class, 'deletePro'] );
});