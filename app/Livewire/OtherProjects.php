<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProjectCategory;

class OtherProjects extends Component
{
    public $projects;
    public function mount(){
    $this->projects=ProjectCategory::with('projects')->where('name','!=','Main')->get();
    // dd($this->projects[0]->projects);
    }
    public function render()
    {
        return view('livewire.other-projects');
    }
}
