<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\User;
use Illuminate\Http\Request;

class ListsController extends Controller {
    public function index() {
        return view('profile.lists.your-lists', [
            'lists' => Lists::latest()->get()
        ]);
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

        return redirect('/your-lists')->with('lists', 'Listing created successfully.');
    }

    public function edit(Lists $lists) {
        return view('profile.lists.edit-your-list', [
            'lists' => $lists
        ]);
    }

    public function update(Request $request, Lists $lists) {
        if ($lists->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $listFields = $request->validate([
            'list_name' => 'required|min:5|max:30',
            'list_description' => 'required|min:5|max:2000'
        ]);

        $listFields['user_id'] = auth()->id();

        $lists->update($listFields);

        return redirect('/your-lists')->with('lists', 'List updated successfully.');
    }

    public function destroy(Lists $lists) {
        if ($lists->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $lists->delete();
        return redirect('/your-lists')->with('lists', 'List deleted successfully.');
    }

    public function show(Lists $lists) {
        return view('profile.lists.show-your-list', [
            'lists' => $lists
        ]);
    }
}
