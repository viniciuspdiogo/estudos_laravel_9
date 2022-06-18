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
                <li style="margin-bottom:10px;background:gray">
                    @if ($user->image)
                        <img src="{{ url("storage/{$user->image}")}}" alt="{{$user->name}}" style="width:100px;display:inline-block">
                    @else
                        
                    @endif
                    {{$user->name}} - {{$user->email}} - 
                    <a href="{{route('users.edit',$user->id)}}">Editar Usuário</a> - 
                    <a href="{{route('users.show',$user->id)}}" >Detalhes</a> - 
                    <a href="{{route('comments.index',$user->id)}}" >Anotações ({{$user->comments->count()}})</a>
                </li>
            @endforeach
        </ul>
        <div>
            {{$users->appends([
                'search' => request()->get('search','')
            ])->links()}}
        </div>
@endsection