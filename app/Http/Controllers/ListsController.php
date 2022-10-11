<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\User;
use Illuminate\Http\Request;

class ListsController extends Controller {
    public function index() {
        return view('profile.lists.your-lists');
    }

    public function create() {
        return view('profile.lists.create-your-list');
    }

    public function store(Request $request) {
        $listFields = $request->validate([
            'list_name' => 'required|min:5|max:30',
            'list_description' => 'required|min:5|max:2000'
        ]);

        $listFields['user_id'] = auth()->id();

        Lists::create($listFields);

        return redirect('/your-lists')->with('message', 'Listing created successfully.');
    }
}
