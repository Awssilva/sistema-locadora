<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadeLocadora extends Model
{
    use HasFactory;

    protected $table = 'unidade_locadora';
    protected $primaryKey = 'id_unidade_locadora';
    protected $guarded = [];  
    public $timestamps = false;

    //Método para retornar todos os registros e informações da tabela unidade_locadora.
    public static function getAllUnidades()
    {
        $result = self::select('unidade_locadora.*', 'funcionario.nome')
                ->join('funcionario', 'funcionario.id_funcionario', '=', 'unidade_locadora.id_funcionario')
                ->get();
        return $result;
    }
}
