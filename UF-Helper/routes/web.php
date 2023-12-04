<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\DeptoController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Material Routes
// Route::get('/materiais', [MaterialController::class, 'index'])->name('materiais.index');
Route::get('/materiais/{disciplinaId}', [MaterialController::class, 'index'])->name('materiais.index');

// Disciplina Routes
Route::get('/disciplinas/{deptoId}', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplinas/{disciplinaId}/show', [DisciplinaController::class, 'show'])->name('disciplinas.show');
Route::get('/disciplinas/{disciplinaId}/edit', [DisciplinaController::class, 'edit'])->name('disciplinas.edit');
Route::patch('/disciplinas/{disciplinaId}', [DisciplinaController::class, 'update'])->name('disciplinas.update');

// Department Routes
Route::get('/deptos', [DeptoController::class, 'index'])->name('deptos.index');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
