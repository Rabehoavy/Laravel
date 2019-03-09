@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-1">{{ $utilisateur->email }}</h1>
    </div>
@endsection