<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use Livewire\Component;

class ProfileDelete extends Component {
    public $userRemoving = null;

    public function deleteProfile($userId) {
        $this->userRemoving = $userId;
        $user = User::findOrFail($this->userRemoving);
        $user->delete();
        session()->flash('message', 'Your account has been deleted.');
    }

    public function render() {
        return view('livewire.profile.profile-delete');
    }
}
