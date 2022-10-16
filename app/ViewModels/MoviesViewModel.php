<?php

namespace App\ViewModels;

use App\Models\Lists;
use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel {
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;
    public $lists;

    public function __construct($popularMovies, $nowPlayingMovies, $genres, $lists) {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
        $this->lists = $lists;
    }

    public function popularMovies() {
        return $this->formatMovies($this->popularMovies);
    }

    public function nowPlayingMovies() {
        return $this->formatMovies($this->nowPlayingMovies);
    }

    public function genres() {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatMovies($movies): \Illuminate\Support\Collection {
        return collect($movies)->map(function ($movie) {
            $genresFormatted = collect($movie['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'],
                'vote_average' => $movie['vote_average'],
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
                'lists' => Lists::where('user_id', auth()->user()->id)->latest()->get()
            ]);
        });
    }
}
