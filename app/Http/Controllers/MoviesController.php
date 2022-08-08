<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movies = Movie::all()

        $movies = Movie::orderBy('id')->get();

        // return view('welcome', [
        //     'movies' => $movies,
        // ]);

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = null;
        $action = '/movies';
        return view('movies.create', compact('method', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     * PERSISTER LES DONNEES
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        // dd($request->all());
        // Valider la requête
        // $validated = $request->validate([

        // ]);

        // à l'ancienne :)
        // $this->validate($request, [

        // ]);


        // dd($request->all());
        Movie::create($request->all());

        return view('master');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);

        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);

        $method = 'PATCH';
        $action = $movie->path();

        // Afficher un formulaire pré-rempli
        return view('movies.edit', compact('movie', 'method', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {

        // On identifie la ressource
        $movie = Movie::findOrFail($id);
        // On met à jour la ressource : persistence des données
        $movie->update($request->all());
        // Renvoie une vue avec un message flash

        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);

        $movie->delete();
        // retourne un message
        return redirect('/');
    }

    // Faire attention à ce genre de construct :
    // Il y a un préfixe et un suffixe sur le nom de ma méthode
    // On se pose la question :
    // Est ce que cette méthode doit être dans ce controlleur ?
    // public function getMovieActors() {}
}
