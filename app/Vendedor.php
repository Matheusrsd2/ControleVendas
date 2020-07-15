<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = [
        'nome', 'email', 'data'
    ];

    protected $table = "vendedores";

    public $timestamps = false;

    public function vendas () {
        return $this->hasMany('App\Vendas', 'vendedor_id');
    }
}
