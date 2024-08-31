<?php

namespace App\Livewire;

use Livewire\Component;

class Playground extends Component
{
    public function handleClick() {
        dump('YAAAAY');
    }
    public function render()
    {
        return view('livewire.playground');
    }
}
