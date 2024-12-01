@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-semibold mb-4">Criar Animal</h1>

    <form action="{{ route('animais.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" id="nome" name="nome" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label for="especie" class="block text-sm font-medium text-gray-700">Espécie</label>
            <input type="text" id="especie" name="especie" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md">Criar</button>
        </div>
    </form>
</div>
@endsection
