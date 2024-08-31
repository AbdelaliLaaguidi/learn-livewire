<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Playground extends Component
{
    public function addUser() {
        User::create([
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'ABC',
        ]);
    }
    
    public function render()
    {
        $users = User::all();
        return view('livewire.playground', [
            'users' => $users,
        ]);
    }
}
