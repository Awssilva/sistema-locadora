<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locacao;


class LocacaoController extends Controller
{
    public function create(){
        return view('locacao.consultar');
    }

    public function createCadastro(){
        return view('locacao.cadastro');
    }
    
    public function cadastrarLocacao(Request $request)
    {
        $locacao = new Locacao();

        //$locacao->id_locacao = $request->id_locacao;
        $locacao->id_veiculo = $request->id_veiculo;
        $locacao->id_cliente = $request->id_cliente;
        $locacao->id_funcionario = $request->id_funcionario;
        $locacao->data_saida = $request->data_saida;
        $locacao->data_devolucao = $request->data_devolucao;
        $locacao->quilometragem_saida = $request->quilometragem_saida;
        $locacao->quilometragem_devolucao = $request->quilometragem_devolucao;
        $locacao->qtde_diaria = $request->qtde_diaria;
        $locacao->valor_locacao = $request->valor_locacao;
        $locacao->data_cadastro = date('Y-m-d H:i:s');

        $locacao->save();

        return redirect(route('locacao.view-menu'))->with('alertaSucesso', 'Cadastro realizado com sucesso!');
    }

    public function consultarLocacao()
    {
        $locacoes = Locacao::all();
        return view('locacao.consultar', compact('locacoes'));
    }

    public function editarLocacao($id_locacao) 
    {
        $locacao = Locacao::findOrFail($id_locacao);
        return view('locacao.editar', compact('locacao'));
    }

    public function atualizarLocacao(Request $request) 
    {
        $locacao = $request->all();
        Locacao::findOrFail($request->id_locacao)->update($locacao);
        return redirect(route('locacao.consultar'))->with('alertaSucesso', 'Cadastro atualizado com sucesso!');

    }

    public function deletarLocacao($id_locacao)
    {
        Locacao::findOrFail($id_locacao)->delete();
        
        return redirect(route('locacao.consultar'))->with('alertaSucesso', 'Cadastro excluído com sucesso!');

    }
}
