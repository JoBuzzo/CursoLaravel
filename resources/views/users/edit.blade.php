@extends('layouts.app')

@section('title', 'Editar Usuário')


@section('content')
<div class="text-right">
    <a href="{{ route('users.index') }}"  class="bg-red-500 hover:bg-red-400 text-white rounded-full py-2 px-6">Voltar</a>
    </div>
<h1 class="text-2xl font-semibold leading-tigh py-2">Editar o Usuário {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('users._partials.form')
</form>
@endsection