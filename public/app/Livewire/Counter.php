<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    #[Layout('layouts.base')]
    public function render()
    {
        return view('livewire.counter');
    }
}
