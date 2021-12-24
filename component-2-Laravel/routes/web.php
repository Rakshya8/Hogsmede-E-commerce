<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::redirect('/', '/welcome');
Route::redirect("/welcome", "/products");

Route::get('/products',[ProductController::class,'index']);
Route::delete('/products/{id}', [ProductController::class,'destroy']);
Route::get('/products/{id}',[ProductController::class, 'show']);
Route::patch('/products/{id}',[ProductController::class, 'update']);
Route::get('/products/{id}/edit',[ProductController::class, 'edit']);
Route::post('/products',[ProductController::class,'store']);

