<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bonjour</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" />
    </head>
    <body>
    <nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="buttons">
                    @include('partials.navbar-item', ['lien' => 'utilisateurs', 'texte' => 'Accueil'])
                    @auth
                        @include('partials.navbar-item', ['lien' => auth()->user()->email, 'texte' => auth()->user()->email])
                    @endauth
                </div>
            </div>

            <div class="navbar-end">
                @auth
                <div class="navbar-item">
                    <div class="buttons">
                        @include('partials.navbar-item', ['lien' => 'mon-compte', 'texte' => 'Mon compte'])
                        @include('partials.navbar-item', ['lien' => 'deconnexion', 'texte' => 'Déconnexion'])
                    </div>
                </div>
                @else
                <div class="navbar-item">
                    <div class="buttons">
                        @include('partials.navbar-item', ['lien' => 'inscription', 'texte' => 'Inscription'])
                        @include('partials.navbar-item', ['lien' => 'connexion', 'texte' => 'Connexion'])
                    </div>
                </div>
                @endauth
            </div>
        </div>
        </nav>
        <div class="container">
            @include('flash::message')

            @yield('contenu')
        </div>
    </body>
</html>
