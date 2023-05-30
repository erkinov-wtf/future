<?php

namespace App\Http\Livewire\Admin\Components;

use Livewire\Component;

class Navigation extends Component
{
    public $navigation;

    public function render()
    {
        return view('livewire.admin.components.navigation');
    }

    public function mount()
    {
        $this->navigation = \App\Models\Navigation::where('role', null)->with('children')->where('parent_id', '=', 0)->get();
    }
}
