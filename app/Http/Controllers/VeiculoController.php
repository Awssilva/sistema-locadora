<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
class VeiculoController extends Controller
{

    public function create(){
        return view('veiculo.consultar');
    }

    public function create_cadastro(){
        return view('veiculo.cadastro');
    }

    public function cadastrarVeiculo(Request $request)
    {
        $veiculo = new Veiculo();

        //$veiculo->id_veiculo = $request->id_veiculo;
        $veiculo->id_unidade_locadora = $request->id_unidade_locadora;
        $veiculo->placa = $request->placa;
        $veiculo->nome = $request->nome;
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->ano = $request->ano;
        $veiculo->quilometragem = $request->quilometragem;
        $veiculo ->data_cadastro =  date('Y-m-d H:i:s');
                
        $veiculo->save();

        return redirect(route('veiculo.view-menu'))->with('alertaSucesso', 'Cadastro realizado com sucesso!');
    }

    public function consultarVeiculo()
    {
        $veiculos = Veiculo::all();
        return view('veiculo.consultar', compact('veiculos'));
    }

    public function editarVeiculo($id_veiculo) {
        $veiculo = Veiculo::findOrFail($id_veiculo);
        return view('veiculo.editar', compact('veiculo'));
    }

    public function atualizarVeiculo(Request $request) 
    {
        $veiculo = $request->all();
        Veiculo::findOrFail($request->id_veiculo)->update($veiculo);
        return redirect(route('veiculo.consultar'))->with('alertaSucesso', 'Cadastro atualizado com sucesso!');
    }

    public function deletarVeiculo($id_veiculo)
    {
        Veiculo::findOrFail($id_veiculo)->delete();
        return redirect(route('veiculo.consultar'))->with('alertaSucesso', 'Cadastro atualizado com sucesso!');
    }
}
