<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieAPIController extends Controller
{
    /**
     * Permet de récupérer la liste complète des films.
     */
    public function index()
    {
        // On récupère tous les films par ordre d'id !
        return Movie::orderBy('id')->get();
    }

    /**
     * Permet d'enregistrer un nouveau film.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'bail|required|string|max:255',
            'description' => 'bail|required|string',
            'duration' => 'bail|required|integer|between:0,18000', // 5 heures max
            'release' => 'bail|required|date',
            'director_id' => 'bail|nullable|integer|exists:directors,id'
        ]);

        $movie = Movie::create($validated);

        return $movie;
    }

    /**
     * Permet de récupérer un film.
     *
     * @param  \App\Models\Movie  $movie
     */
    public function show(Movie $movie)
    {
        // Grâce au typage et au nom de mon paramètre, je récupère l'instance de Movie qui correspond à l'id dans la barre d'adresse
        return $movie;
    }

    /**
     * Permet de mettre à jour un film.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     */
    public function update(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'name' => 'bail|nullable|string|max:255',
            'description' => 'bail|nullable|string',
            'duration' => 'bail|nullable|integer|between:0,18000', // 5 heures max
            'release' => 'bail|nullable|date',
            'director_id' => 'bail|nullable|integer|exists:directors,id'
        ]);

        $movie->update($validated);

        return $movie;
    }

    /**
     * Permet de supprimer un film.
     *
     * @param  \App\Models\Movie  $movie
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
    }

    /**
     * Permet de récupérer les acteurs liés à un film.
     *
     * @param \App\Models\Movie $movie
     */
    public function actors(Movie $movie)
    {
        return $movie->actors;
    }

    /**
     * Permet de récupérer le réalisateur lié à un film.
     *
     * @param \App\Models\Movie $movie
     */
    public function director(Movie $movie)
    {
        return $movie->director;
    }

    /**
     * Permet d'associer un acteur à un film
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Movie $movie
     */
    public function addActor(Request $request, Movie $movie)
    {
        $validated = $request->validate([
            'actor_id' => 'bail|required|integer|exists:actors,id',
        ]);

        if (!$movie->actors->contains('id', $validated['actor_id'])) {
            $movie->actors()->attach($validated['actor_id']);
        }
    }
}
