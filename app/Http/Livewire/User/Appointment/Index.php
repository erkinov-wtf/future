<?php

namespace App\Http\Livewire\User\Appointment;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $patient_name, $departments, $department = 'default', $date, $time, $doctors, $doctor_name = 'default', $comment, $status;

    public function render()
    {
        return view('livewire.user.appointment.index');
    }

    protected $rules = [
        'department' => 'required|string',
        'doctor_name' => 'required|string',
        'date' => 'required',
        'time' => 'required',
        'comment' => 'string',
    ];

    private function resetFields()
    {
        $this->department = 'default';
        $this->doctor_name = 'default';
        $this->date = '';
        $this->time = '';
        $this->comment = '';
    }

    public function checkDefaults()
    {
        if ($this->department != 'default' and $this->doctor_name != 'default') {
            $this->storeAppointment();
        } else {
            abort(403);
        }
    }

    private function storeAppointment()
    {
        $this->validate();

        try {
            Appointment::create([
                'patient_name' => Auth::user()->name,
                'department' => $this->department,
                'date' => $this->date,
                'time' => $this->time,
                'doctor_name' => $this->doctor_name,
                'comment' => $this->comment,
            ]);
            session()->flash('success', 'Appointment Created Successfully!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error', 'Something went wrong!');
        }
    }

    public function mount()
    {
        $this->departments = Department::all();

        $this->doctors = User::whereHas('roles', function ($i) {
            $i->where('name', 'doctor');
        })->get();
    }
}
