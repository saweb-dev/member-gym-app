<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    // public function render()
    // {
    //     return view('livewire.dashboard.dashboard');
    // }
    public function render()
    {
        return view('livewire.dashboard.dashboard')
            ->layout('components.layouts.app', ['title' => 'Dashboard']);
    }
}
