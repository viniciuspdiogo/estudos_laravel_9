@extends('layouts.app')

@section('title','Criar Usuário')

@section('content')
    <h1>Novo Usuário</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" class="text" placeholder="Nome:" value="{{old('name')}}">
        <input type="text" name="email" class="email" placeholder="Email:" value="{{old('email')}}">
        <input type="password" name="password" class="password" placeholder="Senha:">
        <button class="submit">Criar Usuário</button>
    </form>
@endsection