@extends('admin.layouts.app')

@section('title', 'Lista de Usuários')

@section('content')
<h1>Usuários:</h1>

@if (session()->has('success'))
    {{ session('success') }}
@endif

<p>
    <a href="{{ route('users.create') }}">Cadastrar Usuário</a>
</p>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Criado em</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->created_at }}</td>
            <td><a href="{{ route('users.edit', $user->id) }}">Editar</a></td>
        </tr>
        @empty
            <tr>
                <td colspan="4">Nenhum usuário no banco</td>
            </tr>
        @endforelse 

    </tbody>
</table>
{{ $users->links()}}
@endsection