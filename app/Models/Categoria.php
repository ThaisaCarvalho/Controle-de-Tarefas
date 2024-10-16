<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Especifica o nome da tabela no banco de dados
    protected $table = 'categorias';

    // Atributos  de preenchimento
    protected $fillable = [
        'nome',  // Nome da categoria
    ];
}
