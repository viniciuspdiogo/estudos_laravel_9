@extends('layouts.app')

@section('title','Criar Novo Comentário para o Usuário {$user->name}')

@section('content')
    <h1>Criar Novo Comentário para o Usuário {{$user->name}}</h1>
    @include('includes.validations-form')
    <form action="{{ route('comments.store',$user->id) }}" method="post">
        @csrf
        @include('users.comments._partials.form')
    </form>
@endsection