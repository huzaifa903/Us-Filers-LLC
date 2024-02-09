<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FormOrderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);


Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/reset', function () {
    return view('auth.reset');
});
Route::get('/forgot', function () {
    return view('auth.forgot');
});

//register
// Route::post('/create', [AuthController::class, 'create'])->name('create');
Route::post('/check', [AuthController::class, 'check'])->name('check');
// Route::get('/verify', [AuthController::class, 'verify'])->name('verify');

//forgot password
Route::get('/password/forgot', [AuthController::class, 'showForgotForm'])->name('forgot.password.form');
Route::post('/password/forgot', [AuthController::class, 'sendResetLink'])->name('forgot.password.link');
Route::get('/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('reset.password.form');
Route::post('/password/reset', [AuthController::class, 'resetPassword'])->name('reset.password');

//logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//upload policy
Route::get('/policies', [PolicyController::class, 'index']);
Route::get('/policy/add', [PolicyController::class, 'add']);
Route::post('/policy/add', [PolicyController::class, 'store']);
Route::get('/policy/edit/{policy}', [PolicyController::class, 'edit']);
Route::post('/policy/edit/{policy}', [PolicyController::class, 'update']);
Route::post('/policy/delete/{id}', [PolicyController::class, 'delete']);

//states
Route::get('/states', [StateController::class, 'index']);
Route::get('/state/add', [StateController::class, 'add']);
Route::post('/state/add', [StateController::class, 'store']);
Route::get('/state/edit/{state}', [StateController::class, 'edit']);
Route::post('/state/edit/{state}', [StateController::class, 'update']);
Route::post('/state/delete/{id}', [StateController::class, 'delete']);

//countries
Route::get('/countries', [CountryController::class, 'index']);
Route::get('/country/add', [CountryController::class, 'add']);
Route::post('/country/add', [CountryController::class, 'store']);
Route::get('/country/edit/{country}', [CountryController::class, 'edit']);
Route::post('/country/edit/{country}', [CountryController::class, 'update']);
Route::post('/country/delete/{id}', [CountryController::class, 'delete']);

//user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/add', [UserController::class, 'add']);
Route::post('/user/add', [UserController::class, 'store']);
Route::get('/user/edit/{user}', [UserController::class, 'edit']);
Route::post('/user/edit/{user}', [UserController::class, 'update']);
Route::post('/user/delete/{id}', [UserController::class, 'delete']);
Route::post('/user/toggleStatus/{user}', [UserController::class, 'toggleStatus']);

//role
Route::get('/role', [RoleController::class, 'index']);
Route::get('/role/add', [RoleController::class, 'add']);
Route::post('/role/add', [RoleController::class, 'store']);
Route::get('/role/edit/{role}', [RoleController::class, 'edit']);
Route::post('/role/edit/{role}', [RoleController::class, 'update']);
Route::post('/role/delete/{id}', [RoleController::class, 'delete']);

//form
Route::get('/select-package', [FormOrderController::class, 'selectionAdd']);
Route::post('/select-package', [FormOrderController::class, 'selectionStore']);

Route::get('/contact-person-details', [FormOrderController::class, 'contactPersonAdd']);
Route::post('/contact-person-details', [FormOrderController::class, 'contactPersonStore']);

Route::get('/state-filing', [FormOrderController::class, 'stateFilingAdd']);
Route::post('/state-filing', [FormOrderController::class, 'stateFilingStore']);

Route::get('/company-information', [FormOrderController::class, 'companyInfoAdd']);
Route::post('/company-information', [FormOrderController::class, 'companyInfoStore']);

Route::get('/platinum-kit-invite', [FormOrderController::class, 'platinumKitAdd']);
Route::post('/platinum-kit-invite', [FormOrderController::class, 'platinumKitStore']);

Route::get('/process-members', [FormOrderController::class, 'processMemberAdd']);
Route::post('/process-members', [FormOrderController::class, 'processMemberStore']);

Route::get('/register-agent', [FormOrderController::class, 'registerAgentAdd']);
Route::post('/register-agent', [FormOrderController::class, 'registerAgentStore']);
