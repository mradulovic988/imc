<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller {
    public function index() {
        return view('movies.index');
    }

    public function show($id) {
        return view('movies.show');
    }
}
