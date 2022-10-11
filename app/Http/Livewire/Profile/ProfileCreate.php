<?php

namespace App\Http\Livewire\Profile;

use App\Models\MyProfiles;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileCreate extends Component {
    use WithFileUploads;

    public $name, $last_name, $email, $country, $state, $city, $zip, $address, $message, $file;

    public function addProfile() {
        $addProfile = $this->validate([
            'name' => 'required|min:2|max:20',
            'last_name' => 'min:2|max:20',
            'email' => 'required|email',
            'country' => 'required',
            'state' => 'min:2|max:20',
            'city' => 'min:2|max:20',
            'zip' => 'min:2|max:20',
            'address' => 'min:2|max:20',
            'file' => 'image|max:1024|mimes:jpg,png,jpeg'
        ]);

        $addProfile['file'] = $this->file->store('img', 'public');

        User::updateOrCreate(
            ['id' => auth()->id()],
            $addProfile
        );

        session()->flash('message', 'Profile information successfully updated.');
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
        return view('livewire.profile.profile-create', [
            'users' => User::all(),
        ]);
    }
}
