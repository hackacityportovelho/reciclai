<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pev extends Model
{
    protected $table = 'pevs';
    protected $fillable = ['name', 'endereco', 'cep', 'numero', 'telefone', 'bairro', 'email', 'responsavel', 'dias','tiposResiduos'];
    public $timestamps = true;
}
