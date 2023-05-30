<?php

namespace App\Http\Livewire\Doctor\Appointment;

use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $patient, $patient_name, $department, $age, $gender, $date, $time, $doctor_name, $comment, $status;

    use WithPagination;

    public function render()
    {
        return view('livewire.doctor.appointment.index', [
            'appointments' => Appointment::where('doctor_name', Auth::user()->name)->latest()->paginate(10),
        ])->layout('layouts.doctor');
    }

    public function viewAppointment(Appointment $id)
    {
        $this->patient_name = $id->patient_name;
        $this->department = $id->department;
        $this->date = $id->date;
        $this->time = $id->time;
        $this->doctor_name = $id->doctor_name;
        $this->comment = $id->comment;
    }

    public function acceptAppointment($id) {
        try {
            Appointment::whereId($id)->update([
                'status' => 'accepted'
            ]);
            session()->flash('success', 'Appointment Accepted Successfully!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error', 'Something went wrong!');
        }

        return redirect()->route('appointments.role-check');
    }


    public function declineAppointment($id) {
        try {
            Appointment::whereId($id)->update([
                'status' => 'declined',
            ]);
            session()->flash('success', 'Appointment Declined Successfully!');
            $this->resetFields();
        } catch (\Exception $ex) {
            session()->flash('error', 'Something went wrong!');
        }

        return redirect()->route('appointments.role-check');
    }
}
