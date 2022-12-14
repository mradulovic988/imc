<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\ViewModels\TvShowViewModel;
use App\ViewModels\TvViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TvController extends Controller {
    public function index() {
        $lists = Lists::all();
        $popularTv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
            ->json()['results'];

        $topRatedTv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/top_rated')
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/genre/movie/list')
            ->json()['genres'];

        // $genres = collect($genresArray)->mapWithKeys(function ($genre) {
        //     return [$genre['id'] => $genre['name']];
        // });

        $tvViewModel = new TvViewModel(
            $popularTv,
            $topRatedTv,
            $genres,
            $lists
        );

        return view('tv.index', $tvViewModel);
    }

    public function show($id) {
        $lists = Lists::all();

        $tvshow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/' . $id . '?append_to_response=credits,videos,images')
            ->json();

        $tvShowViewModel = new TvShowViewModel(
            $tvshow,
            $lists
        );

        return view('tv.show', $tvShowViewModel);
    }
}
