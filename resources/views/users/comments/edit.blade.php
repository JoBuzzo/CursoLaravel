@extends('layouts.app')

@section('title', "Editar o comentário do Usuário {$user->name}" )

@section('content')
<div class="text-right">
    <a href="{{ route('comments.index', $user->id) }}"  class="bg-red-500 hover:bg-red-400 text-white rounded-full py-2 px-4">Voltar</a>
    <a href="{{ route('users.index') }}"  class="shadow bg-blue-500 hover:bg-blue-600 text-white font-bold rounded-full py-2 px-6">Home</a>
</div>
<h1 class="text-2xl font-semibold leading-tigh py-2">Editar o comentário do Usuário {{ $user->name }}</h1>


@include('includes.validations-form')

<form action="{{ route('comments.update', $comment->id) }}" method="post">
    @method('PUT')
    @include('users.comments._partials.form')
</form>
@endsection