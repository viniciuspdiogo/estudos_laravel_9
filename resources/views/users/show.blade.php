@extends('layouts.app')

@section('title','Listagem do Usuário')

@section('content')
    <h1>Detalhes do Usuário</h1>

    <ul>
        <li>Nome - {{$user->name}}</li>
        <li>Email - {{$user->email}}</li>
    </ul>
    <form action="{{route('users.destroy',$user->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Deletar</button>
    </form>
@endsection