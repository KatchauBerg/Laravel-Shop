<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @var int
 **/
//private $id_venda = 'id';


class VendaModel extends Model
{
    protected $table = 'vendas';
    protected $fillable = ['nome', 'email'];
}
