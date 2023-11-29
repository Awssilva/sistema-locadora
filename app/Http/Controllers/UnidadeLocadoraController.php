<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnidadeLocadora;
class UnidadeLocadoraController extends Controller
{

    public function create(){
        return view('unidade.consultar');
    }

    public function createCadastro(){
        return view('unidade.cadastro');
    }

    public function cadastrarUnidadeLocadora(Request $request)
    {
        $unidadeLocadora = new UnidadeLocadora();

        //$unidadeLocadora->id_unidade_locadora = $request->id_unidade_locadora;
        $unidadeLocadora->cidade = $request->cidade;
        $unidadeLocadora->estado = $request->uf;
        $unidadeLocadora->id_funcionario = $request->id_funcionario;
        $unidadeLocadora->data_cadastro = date('Y-m-d H:i:s');

        
        $unidadeLocadora->save();

        return redirect(route('unidadeLocadora.view-menu'))->with('alertaSucesso', 'Cadastro realizado com sucesso!');
    }

    public function consultarUnidadeLocadora()
    {
        $unidadesLocadora = UnidadeLocadora::all();
        return view('unidade.consultar', compact('unidadesLocadora'));
    }

    public function editarUnidadeLocadora($id_unidade_locadora) {
        $unidadeLocadora = UnidadeLocadora::findOrFail($id_unidade_locadora);
        return view('unidade.editar', compact('unidadeLocadora'));
    }

    public function atualizarUnidadeLocadora(Request $request) 
    {
        $unidadeLocadora = $request->all();
        UnidadeLocadora::findOrFail($request->id_unidade_locadora)->update($unidadeLocadora);
        return redirect(route('unidadeLocadora.consultar'))->with('alertaSucesso', 'Cadastro atualizado com sucesso!');
    }

    public function deletarUnidadeLocadora($id_unidade_locadora)
    {
        UnidadeLocadora::findOrFail($id_unidade_locadora)->delete();
        return redirect(route('unidadeLocadora.consultar'))->with('alertaSucesso', 'Cadastro excluído com sucesso!');
    }
}
