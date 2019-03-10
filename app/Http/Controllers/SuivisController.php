<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class SuivisController extends Controller
{
    public function nouveau()
    {
        $utilisateurQuiVaSuivre = auth()->user();
        $utilisateurQuiVaEtreSuivi = Utilisateur::where('email', request('email'))->firstOrFail();

        $utilisateurQuiVaSuivre->suivis()->attach($utilisateurQuiVaEtreSuivi);

        flash("Vous suivez maintenant {$utilisateurQuiVaEtreSuivi->email}.")->success();
        return back();
    }

    public function enlever()
    {
        $utilisateurQuiSuit = auth()->user();
        $utilisateurQuiEstSuivi = Utilisateur::where('email', request('email'))->firstOrFail();

        $utilisateurQuiSuit->suivis()->detach($utilisateurQuiEstSuivi);

        flash("Vous ne suivez plus {$utilisateurQuiEstSuivi->email}.")->success();
        return back();
    }
}
