<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index() {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create() {
        return view('carros.create');
    }

    public function store(Request $request) {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer',
        ]);

        Carro::create($request->all());

        return redirect()->route('carros.index')->with('success', 'Carro criado com sucesso!');
    }

    public function show(Carro $carro) {
        return view('carros.show', compact('carro'));
    }

    public function edit(Carro $carro) {
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, Carro $carro) {
        $request->validate([
            'modelo' => 'required|string|max:255',
            'ano' => 'required|integer',
        ]);

        $carro->update($request->all());

        return redirect()->route('carros.index')->with('success', 'Carro atualizado com sucesso!');
    }

    public function destroy(Carro $carro) {
        $carro->delete();
        return redirect()->route('carros.index')->with('success', 'Carro deletado com sucesso!');
    }
}
