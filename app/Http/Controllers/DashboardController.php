<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Locacao;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function create(){

        $data_atual = date('d/m/Y');
        $veiculos = Veiculo::all();
        $clientes = Cliente::all();
        $locacoes = Locacao::all();

        $count_veiculos = !empty($veiculos) ? count($veiculos) : 'Sem registros' ;
        $count_clientes = !empty($clientes) ? count($clientes) : 'Sem registros' ;
        $count_locacoes = !empty($locacoes) ? count($locacoes) : 'Sem registros' ;
        $count_veiculos_disponiveis = $count_veiculos - $count_locacoes;


        $compact = compact('data_atual', 
                            'count_veiculos',
                            'count_clientes',
                            'count_locacoes',
                            'count_veiculos_disponiveis'
        );

        return view('dashboard', $compact);
    }
}
