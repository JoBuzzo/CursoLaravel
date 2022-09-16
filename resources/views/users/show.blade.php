@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<div class="text-right">
    <a href="{{ route('users.index') }}"  class="bg-red-500 hover:bg-red-400 text-white rounded-full py-2 px-6">Voltar</a>
</div>
<h1 class="text-4xl font-semibold leading-tigh py-2 ">Listagem do usuário {{ $user->name }}</h1>

<div class="w-full bg-white shadow-md rounded px-8 py-30">
    <ul class="py-12 px-80">
        <li class="rounded-full py-2 px-0 text-center border-2 border-gray-200">{{ $user->name }}</li>
        <br>
        <li class="rounded-full py-2 px-0 text-center border-2 border-gray-200">{{ $user->email }}</li>
    </ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST" class="py-12 text-center">
    @method('DELETE')
    @csrf
    <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 ">Deletar</button>
</form>
</div>
@endsection