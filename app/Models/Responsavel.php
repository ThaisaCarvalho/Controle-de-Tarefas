<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    // Especifica o nome da tabela no banco de dados
    protected $table = 'responsaveis';

    // Atributos de preenchimento
    protected $fillable = [
        'nome',   // Nome do responsável
        'email',  // Email do responsável
    ];
}
