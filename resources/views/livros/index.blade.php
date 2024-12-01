@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold">Livros</h1>
    <a href="{{ route('livros.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Adicionar Livro</a>
    <table class="min-w-full mt-6 table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">Título</th>
                <th class="border px-4 py-2">Autor</th>
                <th class="border px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td class="border px-4 py-2">{{ $livro->titulo }}</td>
                    <td class="border px-4 py-2">{{ $livro->autor }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('livros.edit', $livro) }}" class="text-blue-500">Editar</a>
                        <form action="{{ route('livros.destroy', $livro) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Deletar</button>
                        </form>
                    </td>
                </tr
