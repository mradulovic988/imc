<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;

class UserDelete extends Component {

    public $deleteUser = null, $user;

    public function deleteUser($userId) {
        $this->deleteUser = $userId;
        $user = User::findOrFail($this->deleteUser);
        $user->delete();
        session()->flash('message', 'User successfully deleted.');
    }

    public function render() {
        return view('livewire.dashboard.user-delete', [
            'users' => User::all()
        ]);
    }
}
