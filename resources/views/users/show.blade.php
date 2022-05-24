@extends('layouts.app')

@section('title', 'Listagem do Usuário { $user->name }')

@section('content')
    <h1>Listagem do Usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>
@endsection