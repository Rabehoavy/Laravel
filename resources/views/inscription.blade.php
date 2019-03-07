@extends('layout')

@section('contenu')
<form action="/inscription" method="post">
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail" placeholder="Email">
    </div>
    <div>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="user_password" placeholder="Mot de passe">
    </div>
    <div>
        <label for="password">Mot de passe (confirmation) :</label>
        <input type="password" id="password_confirmation" name="user_password_confirmation" placeholder="Mot de passe (confirmation)">
    </div>
    <div class="button">
        <button type="submit">M'inscrire</button>
    </div>
</form>
@endsection