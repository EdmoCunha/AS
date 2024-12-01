@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold">Adicionar Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST" class="mt-6">
        @csrf
        <div class="mb-4">
            <label for="titulo" class="block text-sm font-semibold">Título</label>
            <input type="text" name="titulo" id="titulo" class="w-full border p-2" required>
        </div>
        <div class="mb-4">
            <label for="autor" class="block text-sm font-semibold">Autor</label>
            <input type="text" name="autor" id="autor" class="w-full border p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
    </form>
</div>
@endsection
