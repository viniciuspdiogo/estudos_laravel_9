@extends('layouts.app')

@section('title','Listagem  Usuários')

@section('content')
        <h1>Lista de Usuários (<a href="{{route('users.create')}}">+</a>)
        </h1>
        <form action="{{ route('users.index') }}" method="get">
            <input type="text" name="search" placeholder="Pesquisar">
            <button type="submit">Pesquisar</button>
        </form>
        <ul> 
            @foreach ($users as $user)
                <li>
                    {{$user->name}} - {{$user->email}} - 
                    <a href="{{route('users.edit',$user->id)}}">Editar Usuário</a> - 
                    <a href="{{route('users.show',$user->id)}}" >Detalhes</a>
                </li>
            @endforeach
        </ul>
    
@endsection