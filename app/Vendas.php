<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'comissao', 'valor_venda', 'vendedor_id'
    ];

    protected $hora = [
        'data'
    ];

    protected $dateFormat = 'd-m-Y';
    
    public $timestamps = false;

    public function vendedor () {
        return $this->belongsTo('App\Vendedor', 'vendedor_id', 'id');
    }   
}
