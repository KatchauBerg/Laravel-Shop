<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendaModel extends Model
{
    protected $table = 'vendas';
    protected $fillable = [
        'nome',
        'email',
        'valor_produto',
        'valor_venda',
        'comissao'
    ];
}
