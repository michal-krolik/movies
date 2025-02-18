<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieSearchRequest;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Builder;

class MovieController extends Controller
{
    public function index()
    {
        return view('movies.index');
    }

    public function search(MovieSearchRequest $request)
    {
        $validated = $request->validated();

        // Utworzenie zapytania do bazy danych
        $query = Movie::query();

        // Wyszukiwanie filmu po tytule
        if (key_exists('title', $validated) && !is_null($validated['title'])) {
            $query->whereLike('title', '%' . $validated['title'] . '%');
        }

        // W zależności od zaznaczonych filtrów przepuszcza zapytanie przez wybrane algorytmy
        if (key_exists('algorithm1', $validated)) {
            $query = Movie::algorithmNo1($query);
        }

        if (key_exists('algorithm2', $validated)) {
            $query = Movie::algorithmNo2($query);
        }

        if (key_exists('algorithm3', $validated)) {
            $query = Movie::algorithmNo3($query);
        }

        $movies = $query->get();

        return view('movies.index', compact('movies'));
    }
}
