<?php

namespace App\Livewire;

use App\Models\ProjectCategory;
use Livewire\Component;

class MainProjects extends Component
{
    public $main;
    public function mount(){
    $this->main=ProjectCategory::with('projects')->where('name','Main')->first()->projects;
    // dd($this->main);
    }
    public function render()
    {
        return view('livewire.main-projects');
    }
}
