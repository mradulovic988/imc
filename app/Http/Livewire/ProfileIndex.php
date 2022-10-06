<?php

namespace App\Http\Livewire;

use App\Models\MyProfiles;
use Livewire\Component;

class ProfileIndex extends Component
{
    public function render()
    {
        return view('livewire.profile-index', [
            'profiles' => MyProfiles::all()
        ]);
    }
}
