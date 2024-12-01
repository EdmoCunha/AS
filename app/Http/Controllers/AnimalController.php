<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() {
        $animais = Animal::all();
        return view('animais.index', compact('animais'));
    }

    public function create() {
        return view('animais.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);

        Animal::create($request->all());

        return redirect()->route('animais.index')->with('success', 'Animal criado com sucesso!');
    }

    public function show(Animal $animal) {
        return view('animais.show', compact('animal'));
    }

    public function edit(Animal $animal) {
        return view('animais.edit', compact('animal'));
    }

    public function update(Request $request, Animal $animal) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'especie' => 'required|string|max:255',
        ]);

        $animal->update($request->all());

        return redirect()->route('animais.index')->with('success', 'Animal atualizado com sucesso!');
    }

    public function destroy(Animal $animal) {
        $animal->delete();
        return redirect()->route('animais.index')->with('success', 'Animal deletado com sucesso!');
    }
}

