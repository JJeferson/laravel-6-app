<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cadusuario extends Model
{
    protected $fillable = [
        'nome', 'email','senha', 'telefone' ,'foto'
    ];
}
