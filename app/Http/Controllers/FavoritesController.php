<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;

class FavoritesController extends Controller {
    public function store(Request $request) {
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

        Favorites::create($favoritesFields);

        return redirect('/')->with('favorites', 'Items added to list successfully.');
    }
}
