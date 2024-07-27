<?php

namespace App\Livewire;

// NOTE
use Livewire\Component;

class Counter extends Component
{
    // NOTE public $count = 0
    public $count = 0;

    // NOTE public function increment
    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        // NOTE
        return view('livewire.counter');
    }
}
