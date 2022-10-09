<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUsersController extends Controller {
    public function index() {
        return view('dashboard.users', [
            'users' => User::latest()->paginate(5)
        ]);
    }
}
