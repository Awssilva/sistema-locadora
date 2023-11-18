<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function cadastrarFuncionario(Request $request)
    {
        $funcionario = new Funcionario();

        $funcionario->id_funcionario = $request->id_funcionario;
        $funcionario->id_unidade_locadora = $request->id_unidade_locadora;
        $funcionario->id_cargo = $request->id_cargo;
        $funcionario->nome = $request->nome;
        $funcionario->data_cadastro = date('d/m/Y H:i');

        
        $funcionario->save();

        return redirect('funcionario/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function consultarFuncionario()
    {
        $funcionarios = Funcionario::all();
        return view('funcionario.consultar', compact('funcionarios'));
    }

    public function editarFuncionario($id_funcionario) {
        $funcionario = Funcionario::findOrFail($id_funcionario);
        return view('funcionario.editar', compact('funcionario'));
    }

    public function atualizarFuncionario(Request $request) 
    {
        $funcionario = $request->all();
        Funcionario::findOrFail($request->id_funcionario)->update($funcionario);
        return redirect('funcionario/consultar');
    }

    public function deletarFuncionario($id_funcionario)
    {
        Funcionario::findOrFail($id_funcionario)->delete();
        return redirect('funcionario/consultar');
    }
}
