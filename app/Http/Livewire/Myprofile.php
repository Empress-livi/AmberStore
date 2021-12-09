<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Myprofile extends Component
{
    public $name, $email, $phone;

    public function edit()
    {
        User::update([
            'name'=> $this->name,
            'address'=> $this->address,
            'email'=> $this->email,
            'phone'=> $this->phone
        ]);
    }
    public function render()
    {
        return view('livewire.myprofile');
    }
}
