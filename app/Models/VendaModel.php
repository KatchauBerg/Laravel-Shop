<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class VendaModel extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    protected $fillable = [
        'nome',
        'email',
        'valor_produto',
        'valor_venda',
        'comissao'
    ];

    public function buscaValorTotalVendas(string $email, string $tempo){

        $buscaPrecos = $this->where('email', $email)->where('created_at', 'like', "%{$tempo}%")->get();
        $totalVendasVendedor = $buscaPrecos->sum('valor_venda');

        return (float) $totalVendasVendedor;
    }
}
