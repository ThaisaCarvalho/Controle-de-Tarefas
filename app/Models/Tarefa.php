<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'status', 'responsavel_id', 'categoria_id'];

    // Relacionamento com a tabela Responsável
    public function responsavel()
    {
        return $this->belongsTo(Responsavel::class);
    }

    // Relacionamento com a tabela Categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
