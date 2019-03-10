<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\Message;

class UtilisateursController extends Controller
{
    public function liste()
    {
        $utilisateurs = Utilisateur::all();

        return view('utilisateurs', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    public function voir()
    {
        $email = request('email');

        $utilisateur = Utilisateur::where('email', $email)->firstOrFail();
        $messages = Message::where('utilisateur_id', $utilisateur->id)->latest()->get();

        return view('utilisateur', [
            'utilisateur' => $utilisateur,
            'messages' => $messages,
        ]);
    }
}
