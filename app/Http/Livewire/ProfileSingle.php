<?php

namespace App\Http\Livewire;

use App\Models\MyProfiles;
use Livewire\Component;

class ProfileSingle extends Component {
    public $profile;

    public function mount($profile) {
        $this->profile = $profile;
    }

    public function render() {
        return view('livewire.profile-single');
    }
}
