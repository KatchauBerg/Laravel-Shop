<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vendedoresModel extends Model
{
    protected $table = 'vendedores';

    protected $fillable = [
        'nome',
        'email'
    ];
}
