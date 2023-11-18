<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
class VeiculoController extends Controller
{
    public function cadastrarVeiculo(Request $request)
    {
        $veiculo = new Veiculo();

        $veiculo->id_veiculo = $request->id_veiculo;
        $veiculo->id_unidade_locadora = $request->id_unidade_locadora;
        $veiculo->placa = $request->placa;
        $veiculo->nome = $request->nome;
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->ano = $request->ano;
        $veiculo->quilometragem = $request->quilometragem;
        $veiculo ->data_cadastro = date('d/m/Y H:i');

        $veiculo->save();

        return redirect('veiculo/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
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
        return redirect('veiculo/consultar');
    }

    public function deletarVeiculo($id_veiculo)
    {
        Veiculo::findOrFail($id_veiculo)->delete();
        return redirect('veiculo/consultar');
    }
}
