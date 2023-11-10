<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get("/test/{id}", [HomeController::class, "index"]);


Route::group(['prefix' => 'admin'], function () {
    Route::get("/category", [CategoryController::class, "index"])-> name("admin.category.index");
    Route::get("/category/add", [CategoryController::class, "add"])-> name("admin.category.add");
    Route::get("/category/edit/{id}", [CategoryController::class, "edit"])-> name("admin.category.edit");

    Route::get('/', [AdminController::class, "index"])->name('admin.index');

    Route::get('/book', [BookController::class, "index"])->name('admin.book.index');
    Route::get("/book/add", [CategoryController::class, "add"])-> name("admin.book.add");
    Route::get("/book/edit/{id}", [CategoryController::class, "edit"])-> name("admin.book.edit");
});
