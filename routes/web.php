<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellingController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class,'index']);

Route::get('/products/food-beverage', [ProductsController::class,'food_beverage']);

Route::get('/products/beauty-health', [ProductsController::class,'beauty_health']);

Route::get('/products/baby-kid', [ProductsController::class,'baby_kid']);

Route::get('/products/home-care', [ProductsController::class,'home_care']);

Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

Route::get('/selling', [SellingController::class,'selling']);


