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
            <a href="/utilisateurs" class="navbar-item {{ request()->is('utilisateurs') ? 'is-active' : ''}}">
                Accueil
            </a>
            </div>

            <div class="navbar-end">
                @if(auth()->check())
                <div class="navbar-item">
                    <div class="buttons">
                    <a href="/mon-compte" class="button is-primary {{ request()->is('mon-compte') ? 'is-active' : ''}}">
                        <strong>Mon compte</strong>
                    </a>
                    <a href="/deconnexion" class="button is-light">
                        Déconnexion
                    </a>
                    </div>
                </div>
                @else
                <div class="navbar-item">
                    <div class="buttons">
                    <a href="/inscription" class="button is-primary {{ request()->is('inscription') ? 'is-active' : ''}}">
                        <strong>Inscription</strong>
                    </a>
                    <a href="/connexion" class="button is-light {{ request()->is('connexion') ? 'is-active' : ''}}">
                        Connexion
                    </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
        </nav>
        <div class="container">
            @include('flash::message')

            @yield('contenu')
        </div>
    </body>
</html>
