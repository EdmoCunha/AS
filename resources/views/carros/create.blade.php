@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-4">Criar Carro</h1>

    <form action="{{ route('carros.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="modelo" class="block text-sm font-medium text-gray-700">Modelo</label>
            <input type="text" id="modelo" name="modelo" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="ano" class="block text-sm font-medium text-gray-700">Ano</label>
            <input type="number" id="ano" name="ano" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="pessoa_id" class="block text-sm font-medium text-gray-700">Pessoa</label>
            <select id="pessoa_id" name="pessoa_id" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                @foreach($pessoas as $pessoa)
                    <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md">Criar</button>
        </div>
    </form>
</div>
@endsection
