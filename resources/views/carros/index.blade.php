@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-3xl font-semibold">Carros</h1>
        <a href="{{ route('carros.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md">Adicionar Carro</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-md shadow-md">
            <thead>
                <tr class="text-left bg-gray-100">
                    <th class="px-4 py-2">Modelo</th>
                    <th class="px-4 py-2">Ano</th>
                    <th class="px-4 py-2">Pessoa</th>
                    <th class="px-4 py-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carros as $carro)
                <tr>
                    <td class="px-4 py-2">{{ $carro->modelo }}</td>
                    <td class="px-4 py-2">{{ $carro->ano }}</td>
                    <td class="px-4 py-2">{{ $carro->pessoa->nome }}</td>
                    <td class="px-4 py-2 flex space-x-2">
                        <a href="{{ route('carros.edit', $carro->id) }}" class="text-blue-500">Editar</a>
                        <form action="{{ route('carros.destroy', $carro->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
