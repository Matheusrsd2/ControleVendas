<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendas extends Model
{
    protected $fillable = [
        'comissao', 'valor_venda', 'vendedor_id'
    ];

    public function vendedor () {
        return $this->belongsTo('App\Vendedor', 'id');
    }   
}
