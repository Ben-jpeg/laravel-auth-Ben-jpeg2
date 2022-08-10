<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorAPIController extends Controller
{
    /**
     * Permet de récupérer la liste complète des réalisateurs.
     */
    public function index()
    {
        return Director::orderBy('id')->get();
    }

    /**
     * Permet d'enregistrer un nouveau réalisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required|string|max:255',
        ]);

        $director = Director::create($validated);

        return $director;
    }

    /**
     * Permet de récupérer un réalisateur.
     *
     * @param  \App\Models\Director  $director
     */
    public function show(Director $director)
    {
        return $director;
    }

    /**
     * Permet de mettre à jour un réalisateur.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     */
    public function update(Request $request, Director $director)
    {
        $validated = $request->validate([
            'name' => 'bail|nullable|string|max:255',
        ]);

        $director->update($validated);

        return $director;
    }

    /**
     * Permet de supprimer un réalisateur.
     *
     * @param  \App\Models\Director  $director
     */
    public function destroy(Director $director)
    {
        $director->delete();
    }
}
