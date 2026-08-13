<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;
use App\Http\Controllers\Appointmentcontroller;
use App\Http\Controllers\PController;

Route::get('/', function () {
    return view('welcome');
});


// ROUTES FOR DOCTOR
Route::get('/doctors', [DocController::class, 'index']);
Route::view('/doctor/create','crud_pages.createDoc');
Route::post('/adddoctor', [DocController::class, 'create']);
Route::delete('/doctor/{doctor}/delete',[DocController::class,'destroy']); //  DELETE

Route::get('/doctor/{doctor}/edit', [DocController::class,'edit']);  //  EDIT
Route::post('/save/doctor/{doctor}',[DocController::class,'save']); //  EDIT



// ROUTES FOR PATIENT

Route::get('/patients', [PController::class, 'index']);
Route::view('/patient/create','crud_pages.createPatient');
Route::post('/addpatient',[PController::class, 'create']);
Route::delete('/patient/{patient}/delete',[PController::class,'destroy']); //  DELETE

Route::get('/patient/{patient}/edit', [PController::class,'edit']); //  EDIT
Route::post('/save/patient/{patient}',[PController::class,'save']); //  EDIT



// ROUTES FOR APPOINTMENT

Route::get('/appointments', [Appointmentcontroller::class, 'index']);
Route::get('/appointment/create', [Appointmentcontroller::class, 'getData']);
Route::post('/addappointment', [Appointmentcontroller::class, 'create']);
Route::delete('/appointment/{appointment}/delete',[AppointmentController::class,'destroy']); //  DELETE

// Route::get('/appointment/{appointment}/edit', [AppointmentController::class,'edit']); //  EDIT
// Route::post('/save/appointment/{appointment}',[AppointmentController::class,'save']); //  EDIT