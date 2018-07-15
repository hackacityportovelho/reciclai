<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pev extends Model
{
    protected $table = 'pevs';
    protected $fillable = ['name', 'endereco', 'telefone', 'email', 'responsavel','latLong'];
    public $timestamps = true;
}
