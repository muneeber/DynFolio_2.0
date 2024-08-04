<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SideLink;
use Livewire\Attributes\On;

class Aside extends Component
{
    public $state='hidden';
    public $mainLinks;
    public $socialLinks;
    public function mount(){
    $this->mainLinks=SideLink::where('type','main')->get();
    $this->socialLinks=SideLink::where('type','social')->get();
    }


    #[On('toggle')] 
    public function toggle()
    {
        $this->state='';
        // dd('the fuck');
    }

    public function close(){
        $this->state='hidden';
    
    }

    
    public function render()
    {
        return view('livewire.aside');
    }
}
