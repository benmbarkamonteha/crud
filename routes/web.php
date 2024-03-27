<?php

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
use App\Http\Controllers\CategorieController;
 
Route::get('/categories', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categories/add', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/categories/add', [CategorieController::class, 'save'])->name('categorie.save');
Route::get('/categories/{categorie}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::put('/categories/{categorie}/Update', [CategorieController::class, 'update'])->name('categorie.update');
Route::get('/categories/{categorie}/Destroy', [CategorieController::class, 'destroy'])->name('categorie.destroy');








