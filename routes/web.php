<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\articleCategoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Samplecontroller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    dd('users list');
});
Route::get('/products/{product_id}/{product_name}', function ($productID, $productName) {
    dd('products id:' . $productID . 'product name:' . $productName);
});
// /sample/{book_id}
// dump بزنیم بعدش اکو بزنیم نشون میده ولی دی دی نه
Route::get('/sample', [Samplecontroller::class , 'index']);
Route::get('/sample/{sample_id}', [Samplecontroller::class, 'show']);

Route::get('/pages', [PageController::class , 'index']) -> name('pages.index');
Route::get('/pages/{page_id?}', [PageController::class , 'show']) -> name('pages.show');
Route::get('/product', [ProductController::class , 'index']) -> name('products.index');

Route::get('/admin', [AdminController::class , 'index']);
Route::get('/user', [UserController::class , 'index']);
Route::get('/article', [ArticleController::class , 'index']);
Route::get('/articles', [articleCategoryController::class , 'index']);
//Route::get('/user-addresses/create', [UserController::class , 'create']) -> name('user-addresses.create');
Route::post('/user-addresses/store', [UserController::class , 'store']) -> name('user-addresses.store');
Route::get('/user/create', [UserController::class , 'create']) -> name('user.create');

Route::post('/user/register', [UserController::class , 'register']) -> name('user.register');
Route::prefix('auth')->as('auth.')->group(function (){
   Route::prefix('register')->as('register.')->middleware('user.not.auth')->group(function (){
       Route::get('/', [\App\Http\Controllers\RegisterController::class, 'index'])->name('index');
       Route::post('/', [\App\Http\Controllers\RegisterController::class, 'post'])->name('post');
   });
});

Route::prefix('auth')->as('auth.')->group(function (){
    Route::prefix('login')->as('login.')->middleware('user.not.auth')->group(function (){
        Route::get('/', [LoginController::class, 'index'])->name('index');
        Route::post('/', [LoginController::class, 'post'])->name('post');
    });
    Route::prefix('logout')->as('logout.')->middleware('user.auth')->group(function (){
        Route::get('/', [\App\Http\Controllers\LogoutController::class, 'index'])->name('index');
    });
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('user.auth')
    ->name('dashboard.index');

