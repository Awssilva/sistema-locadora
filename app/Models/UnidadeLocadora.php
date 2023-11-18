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
}
