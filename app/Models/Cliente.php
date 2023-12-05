<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primaryKey = 'id_cliente';
    protected $guarded = [];  
    public $timestamps = false;

    public static function getClientesByNomeCpf($nome, $cpf)
    {
        $query = self::select('cliente.*');

        // Adiciona condição para nome do cliente se não for vazio
        if (!empty($nome)) {
            $query->where('cliente.nome', 'like', '%' . $nome . '%');
        }

        // Adiciona condição para CPF do cliente se não for vazio
        if (!empty($cpf)) {
            $query->orWhere('cliente.cpf', 'like', '%' . $cpf . '%');
        }

        $result = $query->get();

        return $result;
    }

}
