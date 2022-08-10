<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Affiche un formulaire de registration.
     */
    public function index()
    {
        return view('auth.register');
    }

    // Exemple de validation
    // public function register()
    // {
    //     // Validation des champs
    //     // etre sur que l'on a un email
    //     request()->validate([
    //         // rfc : représente des standards : pour email l'email est soumis à une regex
    //         // dns : on fait une requête pour vérifier si le nom de domaine existe
    //         'email' => 'required|bail|email:rfc,dns|unique:users,email',
    //         // 'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
    // }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    protected function create(Request $request)
    {
        $this->validator($request->all());

        // ça c'est bien quand on a pas de mot de passse :/
        // User::create($request->all());

        User::create([
            'name' => $request['name'],
            'password' => bcrypt($request['password']),
            'email' => $request['email'],
        ]);

        $user = User::where('email', $request['email'])->firstOrFail();

        Auth::login($user);

        session()->flash('success_message', 'Votre compte a été créé');

        return redirect('/');
    }
}
