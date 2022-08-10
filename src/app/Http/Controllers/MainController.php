<?php

namespace App\Http\Controllers;

use App\Models\Argument;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $arguments = Argument::all();

        return view('index', [
            'arguments' => $arguments,
        ]);
    }

    public function newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers|max:255',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $validated['email'];
        $subscriber->save();

        return redirect()->route('index')->with('status', 'Vous êtes maintenant abonné à notre newsletter ! Merci à vous !');
    }
}
