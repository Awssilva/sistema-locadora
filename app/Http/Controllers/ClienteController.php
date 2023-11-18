<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('clientes.cadastrar');
    }
    
    public function cadastrarCliente(Request $request)
    {
        $cliente = new Cliente();

        $cliente->id_cliente = $request->id_cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco = $request->endereco;
        $cliente->telefone = $request->telefone;
        $cliente->data_cadastro = date('d/m/Y H:i');

        $cliente->save();

        return redirect('clientes/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function consultarCliente()
    {
        $clientes = Cliente::all();
        return view('clientes.consultar', compact('clientes'));
    }

    public function editarCliente($id_cliente) {
        $cliente = Cliente::findOrFail($id_cliente);
        return view('clientes.editar', compact('cliente'));
    }

    public function atualizarCliente(Request $request) 
    {
        $cliente = $request->all();
        Cliente::findOrFail($request->id_cliente)->update($cliente);
        return redirect('clientes/consultar');//->with('edicaoRealizada', 'Cadastro atualizado com sucesso!');
    }

    public function deletarCliente($id_cliente)
    {
        Cliente::findOrFail($id_cliente)->delete();
        return redirect('clientes/consultar');//->with('exclusaoRealizada', 'Cadastro excluído com sucesso!');
    }
}
