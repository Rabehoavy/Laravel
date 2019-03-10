@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-1">{{ $utilisateur->email }}</h1>

        @if (auth()->check() AND auth()->user()->id === $utilisateur->id)
        <form action="/messages" method="post">
            {{ csrf_field() }}

            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" name="message" placeholder="Qu'avez-vous à dire ?"></textarea>
                </div>
                @if($errors->has('message'))
                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                @endif
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-link" type="submit">Publier</button>
                </div>
            </div>
        </form>

        @endif

        @foreach ($utilisateur->messages as $message)
            <hr>
            <p>
                <strong>{{ $message->created_at }}</strong><br>
                {{ $message->contenu }}
            </p>
        @endforeach
    </div>
@endsection