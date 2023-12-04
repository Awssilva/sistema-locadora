@extends('dashboard_main')

@section('content')
    <div class="info-section bg-body-tertiary d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
        <h2 class="mb-0"><i class="bi bi-car-front-fill me-2"></i><Dashboard></Dashboard></h2>
        <div class="d-flex gap-2">
            <a href="{{ route('veiculo.view-menu') }}" class="btn btn-danger" id="btnVoltar"><i class="bi bi-arrow-left-circle-fill"></i>Voltar</a>
        </div>
    </div>
    <div class="painel-acoes bg-body-tertiary p-3 info-section">
        <form action="{{ route('veiculo.cadastrar') }}" method="POST" enctype="multipart/form-data">
            @csrf

        </form>
    </div>


@endsection