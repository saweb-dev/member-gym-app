<?php

namespace App\Livewire\Profile;

use Livewire\Component;

class Profile extends Component
{
    public $member;
    public function mount()
    {
        $this->member = auth()->user();
    }
    public function render()
    { 
        return view('livewire.profile.profile');
        
    }
}
