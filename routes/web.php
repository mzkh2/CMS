<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// LOGING & REGISTER ROUTES   

Route::view('/register', 'auth.register');
Route::post('/register',[UserController::class,'register']);

Route::post('/logout',[UserController::class,'logout']);

Route::view('/login', 'auth.login');
Route::post('/login', [UserController::class, 'login']);

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

Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/appointment/create', [AppointmentController::class, 'getData']);
Route::post('/addappointment', [AppointmentController::class, 'create']);
Route::delete('/appointment/{appointment}/delete',[AppointmentController::class,'destroy']); //  DELETE

// Route::get('/appointment/{appointment}/edit', [AppointmentController::class,'edit']); //  EDIT
// Route::post('/save/appointment/{appointment}',[AppointmentController::class,'save']); //  EDIT