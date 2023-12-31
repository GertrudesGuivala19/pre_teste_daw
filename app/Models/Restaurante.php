<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    protected $table = 'restaurante';
    protected $fillable = ['nome', 'tipo_cozinha', 'localizacao', 'faixa_preco', 'is_favorite'];
}
