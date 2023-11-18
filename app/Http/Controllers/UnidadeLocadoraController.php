<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnidadeLocadora;
class UnidadeLocadoraController extends Controller
{
    public function cadastrarUnidadeLocadora(Request $request)
    {
        $unidadeLocadora = new UnidadeLocadora();

        $unidadeLocadora->id_unidade_locadora = $request->id_unidade_locadora;
        $unidadeLocadora->cidade = $request->cidade;
        $unidadeLocadora->estado = $request->estado;
        $unidadeLocadora->id_funcionario = $request->id_funcionario;
        $unidadeLocadora->data_cadastro = date('d/m/Y H:i');

        
        $unidadeLocadora->save();

        return redirect('unidadeLocadora/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function consultarUnidadeLocadora()
    {
        $unidadesLocadora = UnidadeLocadora::all();
        return view('unidadeLocadora.consultar', compact('unidadesLocadoras'));
    }

    public function editarUnidadeLocadora($id_unidade_locadora) {
        $unidadeLocadora = UnidadeLocadora::findOrFail($id_unidade_locadora);
        return view('unidadeLocadora.editar', compact('unidadeLocadora'));
    }

    public function atualizarUnidadeLocadora(Request $request) 
    {
        $unidadeLocadora = $request->all();
        UnidadeLocadora::findOrFail($request->id_unidade_locadora)->update($unidadeLocadora);
        return redirect('unidadeLocadora/consultar');//->with('edicaoRealizada', 'Cadastro atualizado com sucesso!');
    }

    public function deletarUnidadeLocadora($id_unidade_locadora)
    {
        UnidadeLocadora::findOrFail($id_unidade_locadora)->delete();
        return redirect('unidadeLocadora/consultar');//->with('exclusaoRealizada', 'Cadastro excluído com sucesso!');
    }
}
