<?php

namespace App\Http\Livewire\Doctor\Components;

use Livewire\Component;

class Navigation extends Component
{
    public $navigation;

    public function render()
    {
        return view('livewire.doctor.components.navigation');
    }

    public function mount()
    {
        $this->navigation = \App\Models\Navigation::where('role', 'doctor')->get();
    }
}
