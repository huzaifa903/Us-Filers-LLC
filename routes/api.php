<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-project-policy/{project_id}', [ApiController::class, 'getPolicy']);


// Route::post('doctorTiming/getById', [ApiController::class, 'getDoctorTimingByDoctorId']);
// Route::post('procedure/getById', [ApiController::class, 'getProcedureById']);
// Route::post('patient/getById', [ApiController::class, 'getPatientById']);
// Route::post('dentalQuadrant/getById', [ApiController::class, 'getDentalQuadrantByPatientId']);

// // Appointments
// Route::get('appointments', [ApiController::class, 'getAppointments']);
// Route::get('appointment/{id}', [ApiController::class, 'getAppointmentById']);
// Route::post('appointment/save', [ApiController::class, 'storeAppointment']);
// Route::post('appointment/update/{appointment}', [ApiController::class, 'updateAppointment']);
// Route::post('appointment/delete/{id}', [ApiController::class, 'deleteAppointment']);
// Route::post('appointment-detail/save', [ApiController::class, 'saveAppointmentStatus']);
// Route::get('appointment-visits/{id}', [ApiController::class, 'getAppointmentVisitsById']);
// Route::post('appointment-images/save/{appointment}', [AppointmentController::class, 'addImages']);
