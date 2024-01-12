<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class Todos extends Controller
{
    
    public function index() {
        $tarefas = Todo::all();

        return view('todos.index', compact('tarefas'));
    }

    public function create() {
        return view('todos.create');
    }

    public function store(Request $request) {
        $titulo = $request->input('titulo');
        $descricao = $request->input('descricao');
        $tarefa = new Todo();

        $tarefa->title = $titulo;
        $tarefa->description = $descricao;

        $tarefa->save();
        return redirect('/');
    }

}
