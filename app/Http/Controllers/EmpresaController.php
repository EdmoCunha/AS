<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index() {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    public function create() {
        return view('empresas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Empresa::create($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa criada com sucesso!');
    }

    public function show(Empresa $empresa) {
        return view('empresas.show', compact('empresa'));
    }

    public function edit(Empresa $empresa) {
        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, Empresa $empresa) {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $empresa->update($request->all());

        return redirect()->route('empresas.index')->with('success', 'Empresa atualizada com sucesso!');
    }

    public function destroy(Empresa $empresa) {
        $empresa->delete();
        return redirect()->route('empresas.index')->with('success', 'Empresa deletada com sucesso!');
    }
}
