@extends('dashboard_main')

@section('content')
    <div class="info-section bg-body-tertiary d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h2 class="mb-0"><i class="bi bi-car-front-fill me-2"></i>Veículos - Novo cadastro</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('veiculo.view-menu') }}" class="btn btn-danger" id="btnVoltar"><i class="bi bi-arrow-left-circle-fill"></i>Voltar</a>
        </div>
    </div>
    <div class="painel-acoes bg-body-tertiary p-3 info-section">
        <form action="{{ route('veiculo.cadastrar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label col-md-2">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="placa" class="form-label col-md-2">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="modelo" class="form-label col-md-2">Modelo</label>
                    <select class="form-select" id="modelo" name="modelo" required>
                        <option >Selecione o modelo do veículo</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="marca" class="form-label col-md-2">Marca</label>
                    <select class="form-select" id="marca" name="marca" required>
                        <option>Selecione a marca do veículo</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ano" class="form-label col-md-2">Ano</label>
                    <input type="text" class="form-control" id="ano" name="ano" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="quilometragem" class="form-label col-md-2">Quilometragem</label>
                    <input type="number" class="form-control" id="quilometragem" name="quilometragem" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="id_unidade_locadora" class="form-label col-md-2">Unidade</label>
                    <select class="form-select" aria-label="Selecione locadora do veículo" id="id_unidade_locadora" name="id_unidade_locadora" required>
                        <option>Selecione a locadora do veículo</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>


@endsection