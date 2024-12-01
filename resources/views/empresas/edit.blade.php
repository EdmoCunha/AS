@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold">Editar Empresa</h1>
    <form action="{{ route('empresas.update', $empresa) }}" method="POST" class="mt-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nome" class="block text-sm font-semibold">Nome</label>
            <input type="text" name="nome" id="nome" class="w-full border p-2" value="{{ $empresa->nome }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Atualizar</button>
    </form>
</div>
@endsection
