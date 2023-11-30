@extends('dashboard_main')

@section('content')

    <div class="info-section bg-body-tertiary d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h2 class="mb-0"><i class="bi bi-building-fill me-2"></i>Unidade - Editar Cadastro</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('unidadeLocadora.consultar') }}" class="btn btn-danger" id="btnVoltar"><i class="bi bi-arrow-left-circle-fill"></i>Voltar</a>
            <a href="{{ route('unidadeLocadora.cadastro') }}" class="btn btn-success" id="btnNovoCliente"><i class="bi bi-car-front"></i>Novo Funcionário</a>
        </div>
    </div>
    <div class="painel-acoes bg-body-tertiary p-3 info-section">
        <form action="{{ route('unidadeLocadora.atualizar', ['id_unidade_locadora' => $unidadeLocadora->id_unidade_locadora]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 row">
                <div class="col-md-6  mb-3">
                    <label for="cidade" class="form-label col-md-2">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $unidadeLocadora->cidade }}" required>
                </div>
                <div class="col-md-6  mb-3">
                    <label for="estado" class="form-label col-md-2">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" value="{{ $unidadeLocadora->estado }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="gerente" class="form-label col-md-2">Gerente</label>
                    <select class="form-select" id="gerente" name="id_funcionario" value="{{ $unidadeLocadora->id_funcionario}}" required>
                        <option >Selecione um gerente</option>
                        <option value="1" <?= $unidadeLocadora->id_funcionario == 1 ? "selected" : "" ?>>One</option>
                        <option value="2" <?= $unidadeLocadora->id_funcionario == 2 ? "selected" : "" ?>>Two</option>
                        <option value="3" <?= $unidadeLocadora->id_funcionario == 3 ? "selected" : "" ?>>Three</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

@endsection