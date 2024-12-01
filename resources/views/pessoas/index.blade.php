@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold">Pessoas</h1>
    <a href="{{ route('pessoas.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Adicionar Pessoa</a>
    <table class="min-w-full mt-6 table-auto">
        <thead>
            <tr>
                <th class="border px-4 py-2">Nome</th>
                <th class="border px-4 py-2">Idade</th>
                <th class="border px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
                <tr>
                    <td class="border px-4 py-2">{{ $pessoa->nome }}</td>
                    <td class="border px-4 py-2">{{ $pessoa->idade }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('pessoas.edit', $pessoa) }}" class="text-blue-500">Editar</a>
                        <form action="{{ route('pessoas.destroy', $pessoa) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
