<?php

namespace App\Livewire;

use App\Models\SkillCategory;
use Livewire\Component;

class Skills extends Component
{
    public $skills;
    public function mount(){
    $this->skills=SkillCategory::with('skills')->get();
    }
    public function render()
    {
        return view('livewire.skills');
    }
}
