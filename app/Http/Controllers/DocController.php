<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DocController extends Controller
{

    public function index()
    {   
        $doctors = Doctor::all();
        return view('doctors', compact('doctors'));
    }

    public function create(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'fee' => 'required|string|max:8',
            'qualifications' => 'required|string|max:10',
        ]);

        Doctor::create([
            'name' => $validatedData['name'],
            'fee' => $validatedData['fee'],
            'qualifications' => $validatedData['qualifications'],
        ]);
        return redirect('/doctors');
    }
}
