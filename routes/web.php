<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MedicinaController;
use App\Http\Controllers\SuministroController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\ConsultaController;
// use App\Http\Controllers\MascotaController;


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
    return view('welcome');
})->middleware('auth');

Route::get('/inicio', function(){
    return view('welcome');
})->name('inicio');

Route::get('/contactanos', function(){
    return view('contacto');
})->name('contacto');  

Route::get('consultas/{id}/pdf',[ConsultaController::class,'pdf'])->middleware('auth.admin')->name('consultas.pdf');


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
// Route::get('mascotas',[MascotaController::class,'index'])->middleware('auth.admin')->name('mascotas.index');
// Route::get('mascotas/create',[MascotaController::class,'create'])->name('mascotas.create');
// Route::post('mascotas',[MascotaController::class,'store'])->name('mascotas.store');
// Route::get('mascotas/{id}',[MascotaController::class,'show'])->middleware('auth.admin')->name('mascotas.show');
// Route::get('mascotas/{id}/edit',[MascotaController::class,'edit'])->middleware('auth.admin')->name('mascotas.edit');
// Route::put('mascotas/{id}',[MascotaController::class,'update'])->middleware('auth.admin')->name('mascotas.update');
// Route::delete('mascotas/{id}',[MascotaController::class,'destroy'])->middleware('auth.admin')->name('mascotas.destroy');

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

// RUTAS DE ESPECIES

Route::get('especies',[EspecieController::class,'index'])->middleware('auth.admin')->name('especies.index');
Route::get('especies/create',[EspecieController::class,'create'])->middleware('auth.admin')->name('especies.create');
Route::post('especies',[EspecieController::class,'store'])->middleware('auth.admin')->name('especies.store');
Route::get('especies/{id}',[EspecieController::class,'show'])->middleware('auth.admin')->name('especies.show');
Route::get('especies/{id}/edit',[EspecieController::class,'edit'])->middleware('auth.admin')->name('especies.edit');
Route::put('especies/{id}',[EspecieController::class,'update'])->middleware('auth.admin')->name('especies.update');
Route::delete('especies/{id}',[EspecieController::class,'destroy'])->middleware('auth.admin')->name('especies.destroy');

//RUTA DE CONSULTAS

Route::get('consultas',[ConsultaController::class,'index'])->middleware('auth.admin')->name('consultas.index');
Route::get('consultas/create',[ConsultaController::class,'create'])->name('consultas.create');
Route::post('consultas',[ConsultaController::class,'store'])->name('consultas.store');
Route::get('consultas/{id}',[ConsultaController::class,'show'])->middleware('auth.admin')->name('consultas.show');
Route::get('consultas/{id}/edit',[ConsultaController::class,'edit'])->middleware('auth.admin')->name('consultas.edit');
Route::put('consultas/{id}',[ConsultaController::class,'update'])->middleware('auth.admin')->name('consultas.update');
Route::delete('consultas/{id}',[ConsultaController::class,'destroy'])->middleware('auth.admin')->name('consultas.destroy');

