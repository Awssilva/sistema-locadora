@extends('dashboard_main')

@section('content')

    <div class="info-section bg-body-tertiary">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
            <h2>Clientes - Editar Cadastro</h2>    
        </div>
    </div>

    <div class="painel-acoes">
        <form action="{{ route('cliente.atualizar', ['id_cliente' => $cliente->id_cliente]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="nome" class="form-label col-md-2">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}">
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="form-label col-md-2">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $cliente->cpf }}">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="endereco" class="form-label col-md-2">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $cliente->endereco }}">
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="form-label col-md-2">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

@endsection