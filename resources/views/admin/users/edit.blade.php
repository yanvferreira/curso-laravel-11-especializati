@extends('admin.layouts.app')

@section('title', 'Editar Usuário')

@section('content')
<h1>Editar Usuário {{ $user->name }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf

    @method('put')

    <input type="text" name="name" placeholder="Nome" value="{{ $user->name}}"/>
    <input type="text" name="email" placeholder="E-mail" value="{{ $user->email}}" />
    <input type="password" name="password" placeholder="Deixe em branco para manter sem alteração" />
    <button type="submit">Cadastrar</button>
</form>
@endsection