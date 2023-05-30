<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'patient_name', 'department', 'date', 'time', 'doctor_name', 'comment', 'status',
    ];
}
