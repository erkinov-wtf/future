<?php

declare(strict_types=1);

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __invoke()
    {
        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('appointments.admin');
        } elseif (Auth::user()->hasRole('doctor')) {
            return redirect()->route('appointments.doctor');
        } elseif (Auth::user()->hasRole('user')) {
            return redirect()->route('appointments.user');
        }
    }
}
