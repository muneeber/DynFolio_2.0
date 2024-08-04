<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Filament\Notifications\Notification;
class ContactSection extends Component
{
    public $message;
    
    #[Validate('required',null,'First Name')]
    public $fname;

    #[Validate('required',null,'Last Name')]
    public $lname;

    #[Validate('required')]
    public $email;

    #[Validate('required')]
    public $phone;

    #[Validate('required')]
    public $details;

    public function save(){
    $this->validate();
    $res=Contact::create([
        'name'=>$this->fname.' '.$this->lname,
        'email'=>$this->email,
        'phone'=>$this->phone,
        'message'=>$this->details,

    ]);
    if ($res) {
        // Notification of success
        $this->reset();
    $this->message='Message Sent Succefully';
       
    }
    }

    public function rest(){
    
    }
    public function render()
    {
        return view('livewire.contactSection');
    }
}
