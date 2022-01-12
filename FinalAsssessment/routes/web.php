<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SearchController;
use App\Models\Product;



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
//Using auto resolution for newsletter service
Route::post('newsletter', NewsletterController::class);

//Loading deafult view to home
Route::get('/', function () {
    return view('welcome', [
        'product'=>Product::all()->where('category','book'),
        'cdproduct'=>Product::all()->where('category','cd'),
        'gameproduct'=>Product::all()->where('category','game'),
    ]);
})->name('home');

//Loading deafult login view for admin
Route::get('/admin', function () {
    return view('admin/login');
})->name('admin-login');

//Loading deafult search view for admin
Route::get('/search',[SearchController::class, 'index'])->name('search');

//Routing logged in user to dashboard made by Jetstream
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Creating route group for admin prefix routes

Route::prefix('admin')->middleware(['auth','auth.isAdmin', 'verified'])->name('admin.')->group(function(){
    Route::resource('/users',UserController::class);
});

//Different action routes for products
Route::get('/product-view', [App\Http\Controllers\ProductController::class, 'index'])->name('Product.index');
Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('Product.create')->middleware(['auth','verified']);
Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('Product.show');
Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('Product.store')->middleware(['auth','verified']);
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('Product.edit')->middleware(['auth','verified']);
Route::patch('/products/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('Product.update')->middleware(['auth','verified']);
Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('Product.destroy')->middleware(['auth','verified']);


