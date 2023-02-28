<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MascotaController;

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
    return view('inicio');
});  


// RUTAS DE LOGIN
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest') ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


// RUTAS DE LOGIN
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest') ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth') ->name('login.destroy');


// RUTAS DE ADMIN
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');


// RUTAS DE MASCOTAS
Route::get('mascotas',[MascotaController::class,'index'])->middleware('auth.admin')->name('mascotas.index');
Route::get('mascotas/create',[MascotaController::class,'create'])->middleware('auth.admin')->name('mascotas.create');
Route::post('mascotas',[MascotaController::class,'store'])->middleware('auth.admin')->name('mascotas.store');
Route::get('mascotas/{id}',[MascotaController::class,'show'])->middleware('auth.admin')->name('mascotas.show');
Route::get('mascotas/{id}/edit',[MascotaController::class,'edit'])->middleware('auth.admin')->name('mascotas.edit');
Route::put('mascotas/{id}',[MascotaController::class,'update'])->middleware('auth.admin')->name('mascotas.update');
Route::delete('mascotas/{id}',[MascotaController::class,'destroy'])->middleware('auth.admin')->name('mascotas.destroy');