<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Doctor;
use App\Models\Patient;
class Appointment extends Model
{
    protected $fillable = [
    'doctor_id',
    'fee',
    'patient_id',
    'sickness'
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}
