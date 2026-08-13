<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::all();
        return view('appointments', compact('appointments'));
    }
    
    public function getData(){
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('crud_pages.appointmentCreate', compact('doctors','patients'));
    }

    public function create(Request $request){
        
        $validate = $request->validate([
            'doctor_id'=>'required',
            'patient_id' => 'required'
        ]);

        $doctor = Doctor::find($request->doctor_id,'fee');
        $patient = Patient::find($request->patient_id,'sickness');

        Appointment::create([
            'doctor_id' => $request->doctor_id,
            'patient_id' => $request->patient_id,
            'fee' => $doctor->fee,
            'sickness' => $patient->sickness,
        ]);

        $appointments = Appointment::all();
        return view('/appointments', compact('appointments'));
    }

    public function destroy(Appointment $appointment){
        $appointment->delete();
        return redirect('/appointments');
    }

    

}