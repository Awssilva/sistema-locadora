<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionario';
    protected $primaryKey = 'id_funcionario';
    protected $guarded = [];  
    public $timestamps = false;
    
    //Método para retornar todos os registros e informações da tabela funcionario.
    public static function getAllFuncionarios()
    {
        $result = self::all();
        return $result;
    }

    //Método para retornar todos os registros e informações de funcionarios que que estão registrados em Unidade.
    public static function getFuncionarioJoinUnidadeLocadora()
    {
        $result = self::join('unidade_locadora', 'funcionario.id_funcionario', '=', 'unidade_locadora.id_funcionario')
                ->get();
        return $result;
    }
    
    //Método para retornar as informações de um funcionário a partir de seu id_funcioanrio.
    public static function getFuncionarioByIdFuncionario($id_funcionario)
    {
        $result = Funcionario::where('id_funcionario', $id_funcionario)->get();
        return $result;
    }    
}
