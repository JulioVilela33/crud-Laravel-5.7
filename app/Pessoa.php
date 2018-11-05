<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable  = [ 
                                'tipo',
                                'doc',
                                'data',
                                'nome_razao',
                                'sobre_fantasia',
                                'cep',
                                'logradouro',
                                'numero',
                                'complemento',
                                'bairro',
                                'cidade',
                                'uf'         
                            ];
}
