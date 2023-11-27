<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\UnidadeLocadoraController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CargoController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Rotas do CRUD Cliente
Route::prefix('dashboard/cliente')->group(function(){
    Route::get('/menu', [ClienteController::class, 'create'])->name('cliente.view-menu');
    Route::get('/cadastro', [ClienteController::class, 'createCadastro'])->name('cliente.cadastro');
    Route::post('/cadastrar', [ClienteController::class, 'cadastrarCliente'])->name('cliente.cadastrar');
    Route::get('/consulta', [ClienteController::class, 'consultarCliente'])->name('cliente.consultar');
    Route::get('/editar/{id_cliente?}', [ClienteController::class, 'editarCliente'])->name('cliente.editar');
    Route::put('/atualizar/{id_cliente}', [ClienteController::class, 'atualizarCliente'])->name('cliente.atualizar');
    Route::delete('/deletar/{id_cliente}', [ClienteController::class, 'deletarCliente'])->name('cliente.deletar');
});

//Rotas do CRUD Funcinario
Route::prefix('dashboard/funcionario')->group(function(){
    Route::get('/menu', [FuncionarioController::class, 'create'])->name('funcionario.view-menu');
    Route::post('/cadastrar', [FuncionarioController::class, 'cadastrarFuncionario'])->name('funcionario.cadastrar');
    Route::get('/consultar', [FuncionarioController::class, 'consultarFuncionario'])->name('funcionario.consultar');
    Route::get('/editar/{id_funcionario?}', [FuncionarioController::class, 'editarFuncionario'])->name('funcionario.editar');
    Route::put('/atualizar/{id_funcionario}', [FuncionarioController::class, 'atualizarFuncionario'])->name('funcionario.atualizar');
    Route::delete('/deletar/{id_funcionario}', [FuncionarioController::class, 'deletarFuncionario'])->name('funcionario.deletar');
});


//Rotas do CRUD UnidadeLocadora
Route::prefix('dashboard/unidadeLocadora')->group(function(){
    Route::get('/menu', [UnidadeLocadoraController::class, 'create'])->name('unidadeLocadora.view-menu');
    Route::post('/cadastrar', [UnidadeLocadoraController::class, 'cadastrarUnidadeLocadora'])->name('unidadeLocadora.cadastrar');
    Route::get('/consultar', [UnidadeLocadoraController::class, 'consultarUnidadeLocadora'])->name('unidadeLocadora.consultar');
    Route::get('/editar/{id_unidade_locadora?}', [UnidadeLocadoraController::class, 'editarUnidadeLocadora'])->name('unidadeLocadora.editar');
    Route::put('/atualizar/{id_unidade_locadora}', [UnidadeLocadoraController::class, 'atualizarUnidadeLocadora'])->name('unidadeLocadora.atualizar');
    Route::delete('/deletar/{id_unidade_locadora}', [UnidadeLocadoraController::class, 'deletarUnidadeLocadora'])->name('unidadeLocadora.deletar');
});

//Rotas do CRUD Veiculo
Route::prefix('dashboard/veiculo')->group(function(){
    Route::get('/menu', [VeiculoController::class, 'create'])->name('veiculo.view-menu');
    Route::get('/cadastro', [VeiculoController::class, 'create_cadastro'])->name('veiculo.cadastro');
    Route::post('/cadastrar', [VeiculoController::class, 'cadastrarVeiculo'])->name('veiculo.cadastrar');
    Route::get('/consulta', [VeiculoController::class, 'consultarVeiculo'])->name('veiculo.consultar');
    Route::get('/editar/{id_veiculo?}', [VeiculoController::class, 'editarVeiculo'])->name('veiculo.editar');
    Route::put('/atualizar/{id_veiculo}', [VeiculoController::class, 'atualizarVeiculo'])->name('veiculo.atualizar');
    Route::delete('/deletar/{id_veiculo}', [VeiculoController::class, 'deletarVeiculo'])->name('veiculo.deletar');
});

//Rotas do CRUD Locacao
Route::prefix('dashboard/locacao')->group(function(){
    Route::get('/menu', [LocacaoController::class, 'create'])->name('locacao.view-menu');
    Route::post('/cadastrar', [LocacaoController::class, 'cadastrarLocacao'])->name('locacao.cadastrar');
    Route::get('/consultar', [LocacaoController::class, 'consultarLocacao'])->name('locacao.consultar');
    Route::get('/editar/{id_locacao?}', [LocacaoController::class, 'editarLocacao'])->name('locacao.editar');
    Route::put('/atualizar/{id_locacao}', [LocacaoController::class, 'atualizarLocacao'])->name('locacao.atualizar');
    Route::delete('/deletar/{id_locacao}', [LocacaoController::class, 'deletarLocacao'])->name('locacao.deletar');
});

//Rotas do CRUD Feedback
Route::prefix('dashboard/feedback')->group(function(){
    Route::get('/menu', [FeedbackController::class, 'create'])->name('feedback.view-menu');
    Route::post('/cadastrar', [FeedbackController::class, 'cadastrarFeedback'])->name('feedback.cadastrar');
    Route::get('/consultar', [FeedbackController::class, 'consultarFeedback'])->name('feedback.consultar');
    Route::get('/editar/{id_feedback?}', [FeedbackController::class, 'editarFeedback'])->name('feedback.editar');
    Route::put('/atualizar/{id_feedback}', [FeedbackController::class, 'atualizarFeedback'])->name('feedback.atualizar');
    Route::delete('/deletar/{id_feedback}', [FeedbackController::class, 'deletarFeedback'])->name('feedback.deletar');
});

//Rotas do CRUD Cargo
Route::prefix('dashboard/cargo')->group(function(){
    Route::get('/menu', [CargoController::class, 'create'])->name('cargo.view-menu');
    Route::post('/cadastrar', [CargoController::class, 'cadastrarCargo'])->name('cargo.cadastrar');
    Route::get('/consultar', [CargoController::class, 'consultarCargo'])->name('cargo.consultar');
    Route::get('/editar/{id_cargo?}', [CargoController::class, 'editarCargo'])->name('cargo.editar');
    Route::put('/atualizar/{id_cargo}', [CargoController::class, 'atualizarCargo'])->name('cargo.atualizar');
    Route::delete('/deletar/{id_cargo}', [CargoController::class, 'deletarCargo'])->name('cargo.deletar');
});
