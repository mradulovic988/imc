<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class UserListView extends ModalComponent {

    public $user;

    public function showUser(User $user) {

    }

    public function render() {
        return view('livewire.admin.user-list-view');
    }
}
