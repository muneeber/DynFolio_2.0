<?php

namespace App\Livewire;

use Livewire\Component;

class Nav extends Component
{
    public function show(){
        $this->dispatch('toggle')->to(Aside::class);
    }
    public function render()
    {
        return view('livewire.nav');
    }
}
