<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('master');
    }
}

// Méthodes RESTful
// index
// show
// create
// store
// edit
// update
// destroy
