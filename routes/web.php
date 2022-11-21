<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpregadoController;
use App\Http\Controllers\EstadiaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PrecoController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\ServicoEstadiaController;
use App\Http\Controllers\TipoQuartoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\CheckSession;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdmController;
use \App\Http\Controllers\EnderecoController;

Route::get('/', [UsuarioController::class, 'inicio'])->name('welcome');
Route::get("/login", [UsuarioController::class, 'entrar'])->name('login');
Route::resource("/usuario", UsuarioController::class, ['except' => 'destroy']);


Route::group(['middleware' => CheckSession::class], function () {

    Route::resource("/endereco", EnderecoController::class, ['except' => 'destroy']);
    Route::delete('/endereco/remover/{id}', [EnderecoController::class, 'destroy'])->name('endereco.remover');

    Route::delete('/usuario/remover/{id}', [UsuarioController::class, 'destroy'])->name('usuario.remover');

    Route::resource("/cliente", ClienteController::class, ['except' => 'destroy']);
    Route::delete('/cliente/remover/{id}', [ClienteController::class, 'destroy'])->name('cliente.remover');

    Route::resource("/quarto", QuartoController::class, ['except' => 'destroy']);
    Route::delete('/quarto/remover/{id}', [QuartoController::class, 'destroy'])->name('quarto.remover');

    Route::resource("/tipo-quarto", TipoQuartoController::class, ['except' => 'destroy']);
    Route::delete('/tipo-quarto/remover/{id}', [TipoQuartoController::class, 'destroy'])->name('tipo-quarto.remover');

    Route::resource("/preco", PrecoController::class, ['except' => 'destroy']);
    Route::delete('/preco/remover/{id}', [PrecoController::class, 'destroy'])->name('preco.remover');

    Route::resource("/reserva", ReservaController::class, ['except' => 'destroy']);
    Route::delete('/reserva/remover/{id}', [ReservaController::class, 'destroy'])->name('reserva.remover');

    Route::resource("/estadia", EstadiaController::class, ['except' => 'destroy']);
    Route::delete('/estadia/remover/{id}', [EstadiaController::class, 'destroy'])->name('estadia.remover');

    Route::resource("/servico", ServicoController::class, ['except' => 'destroy']);
    Route::delete('/servico/remover/{id}', [ServicoController::class, 'destroy'])->name('servico.remover');

    Route::resource("/empregado", EmpregadoController::class, ['except' => 'destroy']);
    Route::delete('/empregado/remover/{id}', [EmpregadoController::class, 'destroy'])->name('empregado.remover');

    Route::resource("/hotel", HotelController::class, ['except' => 'destroy']);
    Route::delete('/hotel/remover/{id}', [HotelController::class, 'destroy'])->name('hotel.remover');

    Route::resource("/servico-estadia", ServicoEstadiaController::class, ['except' => 'destroy']);
    Route::delete('/servico-estadia/remover/{id}', [ServicoEstadiaController::class, 'destroy'])->name('servico-estadia.remover');




    Route::get("/cadastros", [AdmController::class, 'index'])->name('cadastros');

    Route::get("/pagina-inicial", [InicioController::class, 'listarQuartos'])->name('paginaInicial');
    Route::get("/reservas", [InicioController::class, 'listarReservas'])->name('listarReservas');
    Route::get("/servicos", [InicioController::class, 'listarServicos'])->name('listarServicos');
    Route::get("/estadias", [InicioController::class, 'listarEstadias'])->name('listarEstadias');

    Route::post("/fazer-reserva", [InicioController::class, 'fazerReserva'])->name('reservar');

    Route::get("/sair", [InicioController::class, 'sair'])->name('sair');
});
