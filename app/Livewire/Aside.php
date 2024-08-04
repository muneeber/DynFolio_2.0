<?php

namespace App\Livewire;

use App\Models\SideLink;
use Livewire\Component;

class Aside extends Component
{
    public $mainLinks;
    public $socialLinks;
    public function mount(){
    $this->mainLinks=SideLink::where('type','main')->get();
    $this->socialLinks=SideLink::where('type','social')->get();
    }
    public function render()
    {
        return view('livewire.aside');
    }
}
