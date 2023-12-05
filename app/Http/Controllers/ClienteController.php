<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.consultar');
    }

    public function createCadastro(){
        return view('cliente.cadastro');
    }
    
    public function cadastrarCliente(Request $request)
    {
        $cliente = new Cliente();

        //$cliente->id_cliente = $request->id_cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->endereco = $request->endereco;
        $cliente->telefone = $request->telefone;
        $cliente->data_cadastro = date('Y-m-d H:i:s');

        $cliente->save();

        return redirect(route('cliente.view-menu'))->with('alertaSucesso', 'Cadastro realizado com sucesso!');
    }

    public function consultarCliente()
    {
        
        $nome_cliente = request('nome');
        $cpf = request('cpf');
        $clientes = Cliente::getClientesByNomeCpf($nome_cliente, $cpf);
        return view('cliente.consultar', compact('clientes'));
    }

    public function editarCliente($id_cliente) {
        $cliente = Cliente::findOrFail($id_cliente);
        return view('cliente.editar', compact('cliente'));
    }

    public function atualizarCliente(Request $request) 
    {
        $cliente = $request->all();
        Cliente::findOrFail($request->id_cliente)->update($cliente);
        return redirect(route('cliente.consultar'))->with('alertaSucesso', 'Cadastro atualizado com sucesso!');
    }

    public function deletarCliente($id_cliente)
    {
        Cliente::findOrFail($id_cliente)->delete();
        return redirect(route('cliente.consultar'))->with('alertaSucesso', 'Cadastro excluído com sucesso!');
    }
}
