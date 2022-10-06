<?php

namespace App\Http\Livewire;

use App\Models\MyProfiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function PHPUnit\Framework\returnArgument;

class ProfileCreate extends Component {
    public $first_name, $last_name, $email, $country, $state, $city, $zip, $address;

    public function addProfile() {
        $dataValidation = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'address' => 'required',
        ]);

        MyProfiles::updateOrCreate(
            [
                'user_id' => auth()->id()
            ],
            [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'country' => $this->country,
                'state' => $this->state,
                'city' => $this->city,
                'zip' => $this->zip,
                'address' => $this->address,
            ]
        );
    }

    public function render() {
        return view('livewire.profile-create', [
            'users' => User::all(),
            'profiles' => MyProfiles::all()
        ]);
    }
}
