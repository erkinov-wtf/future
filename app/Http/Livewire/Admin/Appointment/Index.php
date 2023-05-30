<?php

namespace App\Http\Livewire\Admin\Appointment;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public $patient, $patient_name, $department, $age, $gender, $date, $time, $doctor_name, $comment;

    use WithPagination;

    public function render()
    {
        return view('livewire.admin.appointment.index', [
            'appointments' => Appointment::latest()->paginate(10),
        ]);
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

}
