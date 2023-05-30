<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        abort_unless(auth()->user()->can('view_dashboard',), 403);

        if (Auth::user()->hasRole('admin')) {
            return view('livewire.admin.dashboard');
        } elseif (Auth::user()->hasRole('doctor')) {
            return view('livewire.doctor.dashboard')->layout('layouts.doctor');
        } elseif (Auth::user()->hasRole('user')) {
            return view('livewire.user.dashboard')->layout('layouts.user');
        }

    }
}
