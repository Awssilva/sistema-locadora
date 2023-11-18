<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locacao;


class LocacaoController extends Controller
{
    public function create(){
        return view('locacao.cadastrar');
    }
    
    public function cadastrarLocacao(Request $request)
    {
        $locacao = new Locacao();

        $locacao->id_locacao = $request->id_locacao;
        $locacao->id_veiculo = $request->id_veiculo;
        $locacao->id_cliente = $request->id_cliente;
        $locacao->id_funcionario = $request->id_funcionario;
        $locacao->data_saida = $request->data_saida;
        $locacao->data_devolucao = $request->data_devolucao;
        $locacao->quilometragem_saida = $request->quilometragem_saida;
        $locacao->quilometragem_devolucao = $request->quilometragem_devolucao;
        $locacao->qtde_diarias = $request->qtde_diarias;
        $locacao->valor_locacao = $request->valor_locacao;
        $locacao->data_cadastro = date('d/m/Y H:i');

        $locacao->save();

        return redirect('locacao/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function consultarLocacao()
    {
        $locacoes = Locacao::all();

        return view('locacao.consultar', compact('locacao'));
    }

    public function editarLocacao($id_locacao) {
        $locacao = Locacao::findOrFail($id_locacao);

        return view('locacao.editar', compact('locacao'));
    }

    public function atualizarLocacao(Request $request) 
    {
        $locacao = $request->all();
        Locacao::findOrFail($request->id_locacao)->update($locacao);

        return redirect('locacao/consultar');
    }

    public function deletarLocacao($id_locacao)
    {
        Locacao::findOrFail($id_locacao)->delete();
        
        return redirect('locacao/consultar');
    }
}
