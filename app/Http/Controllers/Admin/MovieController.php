<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $movies =  Movie::all();
       return view("admin.movies.index", compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.movies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        $validati = $request->validated();

        $movie = new Movie();
        $movie->fill($validati);
        $movie->save();

        // return redirect()->route("admin.posts.show", $newPost->id);
        return redirect()->route("admin.movies.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view("admin.movies.show", compact("movie"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
