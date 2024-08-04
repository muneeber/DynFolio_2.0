<?php

namespace App\Livewire;

use App\Models\Hero;
use Livewire\Component;

class HeroSection extends Component
{

    public $name;
    public $handle;
    public $btn_text;
    public $btn_icon;
    public $backLink;
    public function mount(){
      $this->name=Hero::where('key','name')->first()->value;
      $this->handle=Hero::where('key','handle')->first()->value;
      $this->btn_text=Hero::where('key','btn_text')->first()->value;
      $this->btn_icon=Hero::where('key','btn_icon')->first()->value;
      $this->backLink=Hero::where('key','backLink')->first()->value;
    }

    public function render()
    {
        return view('livewire.heroSection');
    }
}
