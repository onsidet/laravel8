<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/category', [CategoryController::class, 'index'])->name("category");
Route::get('/category/add',[CategoryController::class, 'create'])->name("category.create");
Route::post('/category/add',[CategoryController::class,'store']) ->name("category.store");
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name("category.edit");
Route::put('/category/edit/{id}',[CategoryController::class, 'update'])->name("category.update");
Route::delete('/category/delete/{id}',[CategoryController::class, 'destroy'])->name("category.delete");

Route::get('/product',function (){
    return view("product.list");
});
