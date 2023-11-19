@extends('dashboard_main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
    </div>

    <div class="painel-acoes">
        <form action="{{ route('cliente.cadastrar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="nome" class="form-label col-md-2">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="form-label col-md-2">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="endereco" class="form-label col-md-2">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco">
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="form-label col-md-2">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone">
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>

@endsection
