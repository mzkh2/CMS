<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;


class PController extends Controller
{
    public function index()
    {   
        $patients = Patient::all();
        return view('patients', compact('patients'));
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'age' => 'required|integer|min:0|max:100',
            'sickness' => 'required|string|max:25'
        ]);

        Patient::create([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'sickness' => $validatedData['sickness'],
        ]);
        
        return redirect('/patients');
    }
}

