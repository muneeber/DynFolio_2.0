<?php

namespace App\Livewire;

use App\Models\MiniProject;
use Livewire\Component;

class MiniProjects extends Component
{
    public $minis;
    public function mount(){
    $this->minis=MiniProject::all();
  
    }
    public function render()
    {
        return view('livewire.mini-projects');
    }
}
