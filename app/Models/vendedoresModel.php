<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendedoresModel extends Model
{
    use HasFactory;

    protected $table = 'vendedores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'email'
    ];
}
