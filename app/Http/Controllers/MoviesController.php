<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller {
    public function index() {
        $lists = Lists::all();

        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
            ->json()['results'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/now_playing')
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        // $genres = collect($genresArray)->mapWithKeys(function ($genre) {
        //     return [$genre['id'] => $genre['name']];
        // });

        $moviesViewModel = new MoviesViewModel(
            $popularMovies,
            $nowPlayingMovies,
            $genres,
            $lists
        );

        return view('movies.index', $moviesViewModel);
    }

    public function show($id) {
        $lists = Lists::all();

        $movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/' . $id . '?append_to_response=credits,videos,images')
            ->json();

        $movieViewModel = new MovieViewModel(
            $movie,
            $lists
        );

        return view('movies.show', $movieViewModel);
    }
}
