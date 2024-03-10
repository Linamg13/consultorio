<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [UserController::class, 'about'])->name('about');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/pacientes', [PacienteController::class, 'index'])->name('admin/pacientes');
    Route::get('/admin/pacientes/create', [PacienteController::class, 'create'])->name('admin/pacientes/create');
    Route::post('/admin/pacientes/store', [PacienteController::class, 'store'])->name('admin/pacientes/store');
    Route::get('/admin/pacientes/show/{id}', [PacienteController::class, 'show'])->name('admin/pacientes/show');
    Route::get('/admin/pacientes/edit/{id}', [PacienteController::class, 'edit'])->name('admin/pacientes/edit');
    Route::put('/admin/pacientes/edit/{id}', [PacienteController::class, 'update'])->name('admin/pacientes/update');
    Route::delete('/admin/pacientes/destroy/{id}', [PacienteController::class, 'destroy'])->name('admin/pacientes/destroy');
});
