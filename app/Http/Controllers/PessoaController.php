<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index', compact('pessoas'));
    }

    // Exibir o formulário para criar uma nova pessoa
    public function create()
    {
        return view('pessoas.create');
    }

    // Armazenar uma nova pessoa
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
        ]);

        Pessoa::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
        ]);

        return redirect()->route('pessoas.index')->with('success', 'Pessoa criada com sucesso!');
    }

    // Exibir uma pessoa específica
    public function show(Pessoa $pessoa)
    {
        return view('pessoas.show', compact('pessoa'));
    }

    // Exibir o formulário para editar uma pessoa
    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', compact('pessoa'));
    }

    // Atualizar uma pessoa no banco de dados
    public function update(Request $request, Pessoa $pessoa)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'idade' => 'required|integer|min:0',
        ]);

        $pessoa->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
        ]);

        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso!');
    }

    // Deletar uma pessoa
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();

        return redirect()->route('pessoas.index')->with('success', 'Pessoa deletada com sucesso!');
    }
}
