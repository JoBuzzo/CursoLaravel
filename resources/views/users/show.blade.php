@extends('layouts.app')

@section('title', 'Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do usuário {{ $user->name }}</h1>
<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            Nome
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            E-mail
          </th>
          <th
            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
            <form action="{{ route('users.delete', $user->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit"  class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
            </form>
          </th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        {{ $user->name }}
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
        {{ $user->email }}
    </td>
    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
    </td>
</tr>
</tbody>


@endsection
