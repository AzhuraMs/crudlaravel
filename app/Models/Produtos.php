<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    // Defina os campos que podem ser preenchidos em massa
    protected $fillable = [
        'descricao',
        'qtd',
        'precoUnitario',
        'precoVenda'
    ];

    // Opcional: se quiser usar decimal com precisão
    protected $casts = [
        'precoUnitario' => 'decimal:2',
        'precoVenda' => 'decimal:2',
    ];
}