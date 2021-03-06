<?php

use App\Http\Controllers\ProjectController;
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

Route::get('welcome',[ProjectController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return view('client');
});

Route::get('/Profissional', function () {
    return view('projects/salonprofessional');
});

Route::get('/login', function () {
    return view('auth/loginsalon');
});
