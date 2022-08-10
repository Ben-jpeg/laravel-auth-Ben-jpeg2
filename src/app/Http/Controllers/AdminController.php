<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\APIKeyGenerated;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::query()->get();

        return view('admin.index', [
            'users' => $users,
        ]);
    }

    /**
     * Cette méthode sert à créer des tokens et à les assigner à l'USER
     * qui arrive dans lé paramètres de requêtes
     *
     * @param Request $request
     * @return redirect  back
     */
    public function setApiKey(Request $request)
    {
        // On doit valider l'ID du User
        $request->validate([
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $user = User::find($request['user_id']);

        DB::transaction(function () use ($user) {
            $user->tokens()->delete();

            $token = $user->createToken('default');


            // On envoie un email pour donner le token au User
            Mail::to($user)->send(new APIKeyGenerated($token));
        });

        return redirect()->back()->with('success_message', 'La clé a été générée');
    }

    /**
     * Cette méthode efface le token d'un utilisateur
     *
     * @param Request $request
     * @return void
     */
    public function removeApiKey(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $user = User::find($request['user_id']);

        $user->tokens()->delete();

        return redirect()->back()->with('success_message', 'La clé d\'API a été supprimée');
    }
}
