<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\MedicinaController;
use App\Http\Controllers\SuministroController;

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

Route::get('/', function () {
    return view('panel');
})->middleware('auth');

Route::get('/inicio', function(){
    return view('panel');
})->name('inicio');  

Route::get('mascotas/{id}/pdf',[MascotaController::class,'pdf'])->middleware('auth.admin')->name('mascotas.pdf');


// RUTAS DE REGISTER
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest') ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


// RUTAS DE LOGIN
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest') ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth') ->name('login.destroy');

// RUTAS DE INICIO 

Route::get('/citas', function(){
    return view('citas');
})->name('AgendarCita');  

// RUTAS DE ADMIN
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');


// RUTAS DE MASCOTAS
Route::get('mascotas',[MascotaController::class,'index'])->middleware('auth.admin')->name('mascotas.index');
Route::get('mascotas/create',[MascotaController::class,'create'])->name('mascotas.create');
Route::post('mascotas',[MascotaController::class,'store'])->name('mascotas.store');
Route::get('mascotas/{id}',[MascotaController::class,'show'])->middleware('auth.admin')->name('mascotas.show');
Route::get('mascotas/{id}/edit',[MascotaController::class,'edit'])->middleware('auth.admin')->name('mascotas.edit');
Route::put('mascotas/{id}',[MascotaController::class,'update'])->middleware('auth.admin')->name('mascotas.update');
Route::delete('mascotas/{id}',[MascotaController::class,'destroy'])->middleware('auth.admin')->name('mascotas.destroy');

// RUTAS DE MEDICINAS

Route::get('medicinas',[MedicinaController::class,'index'])->middleware('auth.admin')->name('medicinas.index');
Route::get('medicinas/create',[MedicinaController::class,'create'])->middleware('auth.admin')->name('medicinas.create');
Route::post('medicinas',[MedicinaController::class,'store'])->middleware('auth.admin')->name('medicinas.store');
Route::get('medicinas/{id}',[MedicinaController::class,'show'])->middleware('auth.admin')->name('medicinas.show');
Route::get('medicinas/{id}/edit',[MedicinaController::class,'edit'])->middleware('auth.admin')->name('medicinas.edit');
Route::put('medicinas/{id}',[MedicinaController::class,'update'])->middleware('auth.admin')->name('medicinas.update');
Route::delete('medicinas/{id}',[MedicinaController::class,'destroy'])->middleware('auth.admin')->name('medicinas.destroy');

// RUTAS DE MATERIALES

Route::get('suministros',[SuministroController::class,'index'])->middleware('auth.admin')->name('suministros.index');
Route::get('suministros/create',[SuministroController::class,'create'])->middleware('auth.admin')->name('suministros.create');
Route::post('suministros',[SuministroController::class,'store'])->middleware('auth.admin')->name('suministros.store');
Route::get('suministros/{id}',[SuministroController::class,'show'])->middleware('auth.admin')->name('suministros.show');
Route::get('suministros/{id}/edit',[SuministroController::class,'edit'])->middleware('auth.admin')->name('suministros.edit');
Route::put('suministros/{id}',[SuministroController::class,'update'])->middleware('auth.admin')->name('suministros.update');
Route::delete('suministros/{id}',[SuministroController::class,'destroy'])->middleware('auth.admin')->name('suministros.destroy');

// RUTAS DE CITAS MÉDICAS

Route::get('/reservarcitas/create',[AppointmentController::class,'create'])->middleware('auth.admin')->name('ReservarCita');
Route::post('/miscitas',[AppointmentController::class,'store'])->middleware('auth.admin')->name('ReservarCita');

// RUTAS DE RECETAS MÉDICAS

