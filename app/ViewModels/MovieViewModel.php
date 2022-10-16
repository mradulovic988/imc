<?php

namespace App\ViewModels;

use App\Models\Lists;
use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MovieViewModel extends ViewModel {
    public $movie, $lists;

    public function __construct($movie, $lists) {
        $this->movie = $movie;
        $this->lists = $lists;
    }

    public function movie() {
        return collect($this->movie)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $this->movie['poster_path'],
            'vote_average' => number_format($this->movie['vote_average'], 2),
            'release_date' => Carbon::parse($this->movie['release_date'])->format('M d, Y'),
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movie['credits']['crew'])->take(5),
            'cast' => collect($this->movie['credits']['cast'])->take(5),
            'images' => collect($this->movie['images']['backdrops'])->take(9),
            'lists' => Lists::where('user_id', auth()->user()->id)->latest()->get()
        ])->only([
            'poster_path', 'id', 'genres', 'title', 'vote_average', 'overview', 'release_date', 'credits', 'videos', 'images', 'crew', 'cast', 'images', 'tagline', 'lists'
        ]);
    }
}
