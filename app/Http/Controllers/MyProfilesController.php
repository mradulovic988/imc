<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyProfilesController extends Controller {
    public function index() {
        return view('profile.profile');
    }
}
