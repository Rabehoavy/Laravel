<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/bonjour/{nom}', function () {
    $nom = request('nom');

    return view('bonjour', [
        'prenom' => $nom,
    ]);
});

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', function () {
    request()->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
    ], [
        'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
    ]);

    /*$utilisateur = new App\Utilisateur;
    $utilisateur->email = request('user_mail');
    $utilisateur->mot_de_passe = bcrypt(request('user_password'));*/
    $utilisateur = App\Utilisateur::create([
        'email' => request('email'),
        'mot_de_passe' => bcrypt(request('password')),
    ]);

    $utilisateur->save();

    return 'Votre email est ' . request('email');
    return 'Formulaire reçu';
});

Route::get('/utilisateurs', function () {
    $utilisateurs = App\Utilisateur::all();

    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs
    ]);
});