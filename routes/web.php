<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

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

//Route::get('/',[HomeController::class, 'index']);
//Route::get('/usuarios', [UserController::class, 'index']);



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Usuarios */

Route::get('usuarios', [UserController::class, 'index']);
Route::get('usuarios/create', [UserController::class, 'create']);

/*Provvedores*/

Route::get('proveedores', [ProveedorController::class, 'index']);
Route::get('proveedores/create', [ProveedorController::class, 'create']);

/* Clientes */

Route::get('clientes', [ClienteController::class, 'index']);
Route::get('clientes/create', [ClienteController::class, 'create']);

/* Productos */

Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/create', [ProductoController::class, 'create']);

/* Ventas */

Route::get('ventas', [VentaController::class, 'index']);
Route::get('ventas/create', [VentaController::class, 'create']);

/*
Route::get('/usuarios', function () {
    return view('usuarios');
});
*/

// rutas request

Route::resource('usuarios', UserController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('ventas', VentaController::class);