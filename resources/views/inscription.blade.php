@extends('layout')

@section('contenu')
<form action="/inscription" method="post">
{{ csrf_field() }}

    <div>
        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @if($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
        @endif

    </div>
    <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Mot de passe">
        @if($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
        @endif

    </div>
    <div>
        <label for="password_confirmation">Mot de passe (confirmation) :</label>
        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        @if($errors->has('password_confirmation'))
        <p>{{ $errors->first('password_confirmation') }}</p>
        @endif

    </div>
    <div class="button">
        <button type="submit">M'inscrire</button>
    </div>
</form>
@endsection