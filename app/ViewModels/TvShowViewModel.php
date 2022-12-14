<?php

namespace App\ViewModels;

use App\Models\Lists;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Spatie\ViewModels\ViewModel;

class TvShowViewModel extends ViewModel {
    public $tvshow, $lists;

    public function __construct($tvshow, $lists) {
        $this->tvshow = $tvshow;
        $this->lists = $lists;
    }

    public function tvshow() {
        if (Auth::check()) {
            $checkList = Lists::where('user_id', auth()->user()->id)->latest()->get();
        } else {
            $checkList = Lists::all();
        }

        return collect($this->tvshow)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $this->tvshow['poster_path'],
            'vote_average' => number_format($this->tvshow['vote_average'], 2),
            'first_air_date' => Carbon::parse($this->tvshow['first_air_date'])->format('M d, Y'),
            'genres' => collect($this->tvshow['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->tvshow['credits']['crew'])->take(5),
            'cast' => collect($this->tvshow['credits']['cast'])->take(5),
            'images' => collect($this->tvshow['images']['backdrops'])->take(9),
            'lists' => $checkList
        ])->only([
            'poster_path', 'id', 'genres', 'vote_average', 'overview', 'first_air_date', 'credits', 'videos', 'images', 'crew', 'cast', 'images', 'tagline', 'name', 'created_by', 'lists'
        ]);
    }
}
