<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoritesController extends Controller {
    public function store(Request $request, Favorites $favorites) {
        $favoritesFields = $request->validate([
            'show_category' => 'required',
            'show_id' => 'required',
            'list_id' => 'required',
            'show_name' => 'required',
            'show_rating' => 'required',
            'show_date' => 'required',
            'show_genre' => 'required',
            'show_image' => 'required',
        ]);

        $favoritesFields['user_id'] = auth()->id();

        if (Favorites::where('list_id', $favoritesFields['list_id'])->exists() &&
            Favorites::where('show_id', $favoritesFields['show_id'])->exists()) {

            Favorites::where([
                'list_id' => $favoritesFields['list_id'],
                'show_id' => $favoritesFields['show_id']
            ])->delete();
            return redirect('/')->with('favorites', 'Items removed from the list successfully.');

        } else {
            Favorites::create($favoritesFields);
            return redirect('/')->with('favorites', 'Items added to the list successfully.');
        }

    }
}
