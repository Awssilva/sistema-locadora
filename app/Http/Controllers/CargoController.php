<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;


class CargoController extends Controller
{
    public function create(){
        return view('cargos.cadastrar');
    }
    
    public function cadastrarCargo(Request $request)
    {
        $cargo = new Cargo();

        $cargo->id_cargo = $request->id_cargo;
        $cargo->data_cadastro = date('d/m/Y H:i');

        $cargo->save();

        return redirect('cargos/cadastrar')->with('cadastroRealizado', 'Cadastro realizado com sucesso!');
    }

    public function consultarCargo()
    {
        $cargos = Cargo::all();

        return view('cargos.consultar', compact('cargos'));
    }

    public function editarCargo($id_cargo) {
        $cargo = Cargo::findOrFail($id_cargo);

        return view('cargos.editar', compact('cargo'));
    }

    public function atualizarCargo(Request $request) 
    {
        $cargo = $request->all();
        Cargo::findOrFail($request->id_cargo)->update($cargo);

        return redirect('cargos/consultar');
    }

    public function deletarCargo($id_cargo)
    {
        Cargo::findOrFail($id_cargo)->delete();
        
        return redirect('cargos/consultar');
    }
}
