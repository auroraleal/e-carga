<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rastreio extends Model
{
    public $timestamps = false;

    /*protected $dateFormat = 'd/m/Y';
    
    protected $dates = [
        'dt_carregamento', 
        'previsao_chegada', 
        'data_chegada',
        'saida_terminal'
    ];*/

    protected $fillable = [
        'dt_carregamento', 'placa_caminhao', 'produto', 'quantidade_carregada', 
        'transportadora', 'nota_fiscal', 'previsao_chegada', 'data_chegada', 'saida_terminal'
    ];
}
