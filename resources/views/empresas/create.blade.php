@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold">Adicionar Empresa</h1>
    <form action="{{ route('empresas.store') }}" method="POST" class="mt-6">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block text-sm font-semibold">Nome</label>
            <input type="text" name="nome" id="nome" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>
@endsection
