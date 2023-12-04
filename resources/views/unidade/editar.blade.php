@extends('dashboard_main')

@section('content')

    <div class="info-section bg-body-tertiary d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h2 class="mb-0"><i class="bi bi-building-fill me-2"></i>Unidade - Editar Cadastro</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('unidadeLocadora.consultar') }}" class="btn btn-danger" id="btnVoltar"><i class="bi bi-arrow-left-circle-fill"></i>Voltar</a>
            <a href="{{ route('unidadeLocadora.cadastro') }}" class="btn btn-success" id="btnNovounidadeLocadora"><i class="bi bi-building-fill-add"></i></i>Nova Unidade</a>
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
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>

@endsection