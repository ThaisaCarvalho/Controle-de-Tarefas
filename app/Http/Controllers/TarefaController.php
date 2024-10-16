<?php

namespace App\Http\Controllers;

use App\Models\Responsavel;
use App\Models\Categoria;
use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::with('responsavel', 'categoria')->get();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        $responsaveis = Responsavel::all();
        $categorias = Categoria::all();
        return view('tarefas.create', compact('responsaveis', 'categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_responsavel' => 'required',
            'email_responsavel' => 'required|email',
            'nome_categoria' => 'required',
            'nome_tarefa' => 'required',
            'descricao' => 'required',
            'status' => 'required|in:pendente,em_andamento,concluida'
        ]);

        // Criar ou buscar o responsável
        $responsavel = Responsavel::firstOrCreate(
            ['email' => $request->email_responsavel],
            ['nome' => $request->nome_responsavel]
        );

        // Criar a categoria
        $categoria = Categoria::firstOrCreate(['nome' => $request->nome_categoria]);

        // Criar a tarefa
        Tarefa::create([
            'nome' => $request->nome_tarefa,
            'descricao' => $request->descricao,
            'status' => $request->status,
            'responsavel_id' => $responsavel->id,
            'categoria_id' => $categoria->id
        ]);

        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso!');
    }
}
