<?php

namespace App\ViewModels;

use App\Models\Lists;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel {
    public $popularTv;
    public $topRatedTv;
    public $genres;
    public $lists;

    public function __construct($popularTv, $topRatedTv, $genres, $lists) {
        $this->popularTv = $popularTv;
        $this->topRatedTv = $topRatedTv;
        $this->genres = $genres;
        $this->lists = $lists;
    }

    public function popularTv() {
        return $this->formatTv($this->popularTv);
    }

    public function topRatedTv() {
        return $this->formatTv($this->topRatedTv);
    }

    public function genres() {
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatTv($tv): \Illuminate\Support\Collection {
        return collect($tv)->map(function ($tvshows) {
            $genresFormatted = collect($tvshows['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');

            if (Auth::check()) {
                $checkList = Lists::where('user_id', auth()->user()->id)->latest()->get();
            } else {
                $checkList = Lists::all();
            }

            return collect($tvshows)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvshows['poster_path'],
                'vote_average' => $tvshows['vote_average'],
                'first_air_date' => Carbon::parse($tvshows['first_air_date'])->format('M d, Y'),
                'genres' => $genresFormatted,
                'lists' => $checkList
            ])->only([
                'poster_path', 'id', 'genre_ids', 'name', 'vote_average', 'overview', 'first_air_date', 'genres', 'lists'
            ]);
        });
    }
}
