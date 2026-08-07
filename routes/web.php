<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocController;
use App\Http\Controllers\PController;

Route::get('/', function () {
    return view('welcome');
});


// ROUTES FOR DOCTOR
Route::get('/doctors', [DocController::class, 'index']);
Route::view('/doctor/create','crud_pages.createDoc');
Route::post('/adddoctor', [DocController::class, 'create']);


// ROUTES FOR PATIENT
Route::get('/patients', [PController::class, 'index']);
Route::view('/patient/create','crud_pages.createPatient');
Route::post('/addpatient',[PController::class, 'create']);

Route::view('/appointments', 'appointments');