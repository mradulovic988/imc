<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUsersController extends Controller {
    public function index() {
        return view('dashboard.users', [
            'users' => User::where('role', '=', '0')
                ->latest()
                ->paginate(10)
        ]);
    }
}
