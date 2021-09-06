<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/usuario', [UserController::class, 'index'])->name('usuario');
Route::get('/usuarioPedidos', [UserController::class, 'indexPedidos'])->name('usuarioPedidos');


Route::get('/usuarioLay', [UserController::class, 'indexLayout']);
Route::post('/addicionarCliente', [UserController::class, 'storeCliente'])->name('cliente.add');
Route::post('/addicionarEspecialista', [UserController::class, 'storeEspecialista'])->name('especialista.add');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/addPedido', [PedidosController::class, 'store'])->name('fazerPedido');
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
