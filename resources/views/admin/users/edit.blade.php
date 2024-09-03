@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
<h1>Editar Usuário {{ $user->name }}</h1>


<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf

    @method('put')

    <input type="text" name="name" placeholder="Nome" value="{{ $user->name}}"/>
    <input type="text" name="email" placeholder="E-mail" value="{{ $user->email}}" />
    <input type="password" name="password" placeholder="Senha" />
    <button type="submit">Cadastrar</button>
</form>
@endsection