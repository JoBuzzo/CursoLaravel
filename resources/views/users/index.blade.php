@extends('layouts.app')

@section('title', 'Lista dos Usuários')

@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Listagem dos usuários
    <a href="{{ route('users.create') }}" class="shadow bg-blue-600 hover:bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>

<form action="{{ route('users.index') }}" method="GET" class="py-5">
    <input type="text" name="search" placeholder="Pesquisar" class="md:w-1/6 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
    <button class="shadow bg-gray-200 hover:bg-gray-100 focus:shadow-outline focus:outline-none text-black font-bold py-2 px-4 rounded">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Perfil
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Nome
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            E-mail
          </th>
          <th
            class="px-9 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Editar
          </th>
          <th
            class="px-9 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Detalhes
          </th>
          <th
            class="px-11 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
          >
            Anotações
          </th>
        </tr>
      </thead>
      <tbody>

    @foreach ($users as $user)
    <tr>
      <td class="px-4 py-4 border-b border-gray-200 bg-white text-sm">
          <img src="{{ url("https://static.vecteezy.com/system/resources/thumbnails/005/545/335/small/user-sign-icon-person-symbol-human-avatar-isolated-on-white-backogrund-vector.jpg") }}" alt="User" class="object-cover w-10 rounded-full">    
      </td>
      <td class="px-4 py-4 border-b border-gray-200 bg-white text-sm"> 
          {{ $user->name }}
        </td>
        <td class="px-4 py-4 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
        <td class="px-4 py-4 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('users.edit', $user->id) }}"  class="shadow bg-green-200 hover:bg-green-300 rounded-full py-2 px-6">Editar</a>
        </td>
        <td class="px-4 py-4 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('users.show', $user->id) }}" class="shadow bg-orange-200 hover:bg-orange-300 rounded-full py-2 px-6">Detalhes</a>
        </td>
        <td class="px-4 py-4 border-b border-gray-200 bg-white text-sm">
            <a href="{{ route('comments.index', $user->id) }}" class="shadow bg-blue-200 hover:bg-blue-300 rounded-full py-2 px-6">Anotações ({{ $user->comments->count() }})</a>
        </td>
    @endforeach
</tbody>
</table>
<div class="py-4">
  {{ $users->appends([
    'search' => request()->get('search', '')
  ])->links() }}
</div>
@endsection