@extends('layouts.app')

@section('title',"Criar Usuário {{$user->name}}")

@section('content')
    <h1>Editar o Usuário - {{$user->name}}</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" class="text" placeholder="Nome:" value="{{$user->name}}">
        <input type="text" name="email" class="email" placeholder="Email:" value="{{$user->email}}">
        <input type="password" name="password" class="password" placeholder="Senha:">
        <button class="submit">Editar Usuário</button>
    </form>
@endsection