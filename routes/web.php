<?php

use App\Http\Controllers\Auth\WhatsappContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\verificarAdmin;
use App\Http\Middleware\verificarCliente;
use App\Http\Middleware\verificarEspecialista;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
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

Route::view('/contactMailLayout', 'emails.contactMail');
Route::view('/pedidoResolvidoLayout', 'emails.pedidoResolvido');
Route::view('/resetPassLayout', 'emails.resetPassMail');
Route::view('/verifyMailLayout', 'emails.verifyMail');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('emprego', [HomeController::class, 'emprego'])->name('emprego');
Route::post('/addicionarCliente', [UserController::class, 'storeCliente'])->name('cliente.add');
Route::post('/addicionarEspecialista', [UserController::class, 'storeEspecialista'])->name('especialista.add');
Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
Route::post('/enviarEmail', [ContactController::class, 'enviarEmail'])->name('enviarEmail');
Route::get('cadastrarAdmin', [UserController::class, 'cadAdmin']);
Route::get('/verificar',[AuthController::class, 'verificarUser'])->name('verificarUser');
Route::get('/confirmar',[AuthController::class, 'confirmarEspecialista'])->name('confirmarEspecialista');
Route::get('/certificado',[UserController::class, 'certificado'])->name('baixarCertificado');
Route::post('/resetPassword',[ContactController::class, 'emailPassreset'])->name('resetPassword');
Route::get('/resetPasswordPage',[AuthController::class, 'passResetPage'])->name('resetPasswordPage');
Route::get('/emailReset',[AuthController::class, 'reset'])->name('emailReset');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/resetPasswordMain', [UserController::class, 'resetPassword'])->name('resetPasswordMain');
Route::post('/addPedido', [PedidosController::class, 'store'])->name('fazerPedido');
Route::middleware([Authenticate::class])->group(function () {
    Route::get('/usuario', [UserController::class, 'index'])->name('usuario');
    Route::get('/usuarioPedidos', [UserController::class, 'indexPedidos'])->name('usuarioPedidos');
    Route::get('/especialistaPedidos', [UserController::class, 'indexEspecialista'])->name('especialistaPedidos')->middleware(verificarEspecialista::class);
    Route::post('/updateCelular', [UserController::class, 'updateCelular'])->name('updateCelular');
    Route::post('/updateNivel', [UserController::class, 'actualizarNivel'])->name('updateNivel')->middleware(verificarEspecialista::class);
    Route::post('/updateDoc', [UserController::class, 'updateDoc'])->name('updateDoc')->middleware(verificarEspecialista::class);
    Route::get('resolver/{pedido_id}', [PedidosController::class, 'resolver'])->name('resolver')->middleware(verificarEspecialista::class);
    Route::get('arquivoPedido/{id}', [PedidosController::class, 'show']);
    Route::get('arquivoResolvido/{id}', [PedidosController::class, 'resolucao'])->middleware(verificarCliente::class);
    Route::get('cancelarTrabalho/{id}', [PedidosController::class, 'cancelar'])->middleware([verificarEspecialista::class]);
    Route::get('procurarPedido', [PedidosController::class, 'procurar']);
    Route::post('enviarTrabalho', [PedidosController::class, 'enviarTrabalho'])->middleware(verificarAdmin::class);
    Route::get('/usuarioLay', [UserController::class, 'indexLayout']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/updateUser', [UserController::class, 'update']);
    Route::post('/updateImg', [UserController::class, 'updateImg']);
    Route::get('/ContacteNos', [WhatsappContactController::class, 'WhatsappContact'])->name('ContactUs');

});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('auth:clear-resets');
    $exitCode = Artisan::call('event:clear');
    $exitCode = Artisan::call('optimize:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('clear-compiled');
    $exitCode = Artisan::call('config:cache');
    return 'Concluido'; //Return anything
});

Route::get('/storage', function(){
    $exitCode = Artisan::call('storage:link');
});