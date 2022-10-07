<?php

namespace App\Http\Livewire;

use App\Models\MyProfiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use function PHPUnit\Framework\returnArgument;

class ProfileCreate extends Component {
    public $name, $last_name, $email, $country, $state, $city, $zip, $address;

    public function addProfile() {
        User::updateOrCreate(
            ['id' => auth()->id()],
            $this->validate([
                'name' => 'required|min:2|max:20',
                'last_name' => 'min:2|max:20',
                'email' => 'required|email',
                'country' => 'required',
                'state' => 'min:2|max:20',
                'city' => 'min:2|max:20',
                'zip' => 'min:2|max:20',
                'address' => 'min:2|max:20',
            ])
        );
    }

    public function mount() {
        $this->name = auth()->user()->name;
        $this->last_name = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->country = auth()->user()->country;
        $this->state = auth()->user()->state;
        $this->city = auth()->user()->city;
        $this->zip = auth()->user()->zip;
        $this->address = auth()->user()->address;
    }

    public function render() {
        return view('livewire.profile-create', [
            'users' => User::all(),
        ]);
    }
}
