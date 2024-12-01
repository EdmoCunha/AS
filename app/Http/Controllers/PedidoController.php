<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index() {
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }

    public function create() {
        return view('pedidos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'codigo' => 'required|string|max:255',
        ]);

        Pedido::create($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido criado com sucesso!');
    }

    public function show(Pedido $pedido) {
        return view('pedidos.show', compact('pedido'));
    }

    public function edit(Pedido $pedido) {
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(Request $request, Pedido $pedido) {
        $request->validate([
            'codigo' => 'required|string|max:255',
        ]);

        $pedido->update($request->all());

        return redirect()->route('pedidos.index')->with('success', 'Pedido atualizado com sucesso!');
    }

    public function destroy(Pedido $pedido) {
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('success', 'Pedido deletado com sucesso!');
    }
}
