<?php

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
    return view('welcome');
});

//Rotas do CRUD Cliente
Route::prefix('/cliente')->group(function(){
    Route::get('/cadastrar', [ClienteController::class, 'create'])->name('cliente.view-cadastrar');
    Route::post('/cadastrar', [ClienteController::class, 'cadatrarCliente'])->name('cliente.cadastrar');
    Route::get('/consultar', [ClienteController::class, 'consultarCliente'])->name('cliente.consultar');
    Route::get('/editar/{id_cliente?}', [ClienteController::class, 'editarCliente'])->name('cliente.editar');
    Route::put('/atualizar/{id_cliente}', [ClienteController::class, 'atualizaCliente'])->name('cliente.atualizar');
    Route::delete('/deletar/{id_cliente}', [ClienteController::class, 'deletarCliente'])->name('cliente.deletar');
});

//Rotas do CRUD Funcinario
Route::prefix('/funcionario')->group(function(){
    Route::get('/cadastrar', [FuncionarioController::class, 'create'])->name('funcionario.view-cadastrar');
    Route::post('/cadastrar', [FuncionarioController::class, 'cadatrarFuncionario'])->name('funcionario.cadastrar');
    Route::get('/consultar', [FuncionarioController::class, 'consultarFuncionario'])->name('funcionario.consultar');
    Route::get('/editar/{id_funcionario?}', [FuncionarioController::class, 'editarFuncionario'])->name('funcionario.editar');
    Route::put('/atualizar/{id_funcionario}', [FuncionarioController::class, 'atualizaFuncionario'])->name('funcionario.atualizar');
    Route::delete('/deletar/{id_funcionario}', [FuncionarioController::class, 'deletarFuncionario'])->name('funcionario.deletar');
});


//Rotas do CRUD UnidadeLocadora
Route::prefix('/unidadeLocadora')->group(function(){
    Route::get('/cadastrar', [UnidadeLocadoraController::class, 'create'])->name('unidadeLocadora.view-cadastrar');
    Route::post('/cadastrar', [UnidadeLocadoraController::class, 'cadatrarUnidadeLocadora'])->name('unidadeLocadora.cadastrar');
    Route::get('/consultar', [UnidadeLocadoraController::class, 'consultarUnidadeLocadora'])->name('unidadeLocadora.consultar');
    Route::get('/editar/{id_unidade_locadora?}', [UnidadeLocadoraController::class, 'editarUnidadeLocadora'])->name('unidadeLocadora.editar');
    Route::put('/atualizar/{id_unidade_locadora}', [UnidadeLocadoraController::class, 'atualizaUnidadeLocadora'])->name('unidadeLocadora.atualizar');
    Route::delete('/deletar/{id_unidade_locadora}', [UnidadeLocadoraController::class, 'deletarUnidadeLocadora'])->name('unidadeLocadora.deletar');
});

//Rotas do CRUD Veiculo
Route::prefix('/veiculo')->group(function(){
    Route::get('/cadastrar', [VeiculoController::class, 'create'])->name('veiculo.view-cadastrar');
    Route::post('/cadastrar', [VeiculoController::class, 'cadatrarVeiculo'])->name('veiculo.cadastrar');
    Route::get('/consultar', [VeiculoController::class, 'consultarVeiculo'])->name('veiculo.consultar');
    Route::get('/editar/{id_veiculo?}', [VeiculoController::class, 'editarVeiculo'])->name('veiculo.editar');
    Route::put('/atualizar/{id_veiculo}', [VeiculoController::class, 'atualizaVeiculo'])->name('veiculo.atualizar');
    Route::delete('/deletar/{id_veiculo}', [VeiculoController::class, 'deletarVeiculo'])->name('veiculo.deletar');
});
