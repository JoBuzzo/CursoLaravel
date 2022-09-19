@extends('layouts.app')

@section('title', "Comentários do Usuáro {$user->name}")

@section('content')
<div class="text-right my-3">
  <a href="{{ route('users.index') }}"  class="bg-red-500 hover:bg-red-400 text-white rounded-full py-2 px-4 place-self-end">Voltar</a>
</div>

<div class="w-full bg-gray-200 hover:bg-gray-100 shadow-md rounded px-4 py-2 text-right grid grid-cols-2 gap-4">
  <h1 class="text-2x1 text-left">
    Comentários do Usuáro {{ $user->name }}
  </h1>
  <div class="text-right">
    <a href="{{ route('comments.create', $user->id) }}" class="shadow bg-blue-600 hover:bg-blue-900 rounded-full text-white py-2 px-4 text-sm ">+</a>
  </div>
</div>
<form action="{{ route('comments.index', $user->id) }}" method="GET" class="py-5">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    <button class="shadow bg-gray-200 hover:bg-gray-100 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            Conteúdo
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            Visível
          </th>
          <th
            class="px-10 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            Editar
          </th>
          <th
            class="px-9 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            Excluir
          </th>
        </tr>
      </thead>
      <tbody>

    @foreach ($comments as $comment)
    <tr>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $comment->body }}</td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $comment->visible ? 'SIM' : 'NÃO' }}</td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}"  class="shadow bg-green-200 hover:bg-green-300 rounded-full py-2 px-6">Editar</a>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        <form action="{{ route('comments.delete', $comment->id) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
        </form>
        </td>
    @endforeach
</tbody>
</table>
@endsection