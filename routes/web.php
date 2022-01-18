<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UsersController::class, 'index']);
Route::post('/check', [UsersController::class, 'check'])->name('login.check');
Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
Route::get('/', [UsersController::class, 'index'])->name('user.login');
Route::get('/register', [UsersController::class, 'register'])->name('user.register');
Route::post('/register', [UsersController::class, 'saveRegister'])->name('save.register');
Route::get('/logout', [UsersController::class, 'logout'])->name('user.logout');

Route::post('/save_product', [ProductosController::class, 'store'])->name('save.product');
Route::post('/delete_product', [ProductosController::class, 'destroy'])->name('delete.product');
Route::post('/productos_item', [ProductosController::class, 'show'])->name('edit.product');
Route::post('/productos_edit', [ProductosController::class, 'update'])->name('saveEdit.product');
