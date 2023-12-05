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

Route::middleware('auth')->group(function () {
    Route::get('/', [DeptoController::class, 'index'])->name('deptos.index');
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
Route::get('/materiais/{materialId}/show', [MaterialController::class, 'show'])->name('materiais.show');
Route::get('/materiais/{materialId}/edit', [MaterialController::class, 'edit'])->name('materiais.edit');
Route::patch('/materiais/{materialId}', [MaterialController::class, 'update'])->name('materiais.update');

// Disciplina Routes
Route::get('/disciplinas', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplinas/{disciplinaId}/show', [DisciplinaController::class, 'show'])->name('disciplinas.show');
Route::get('/disciplinas/{disciplinaId}/edit', [DisciplinaController::class, 'edit'])->name('disciplinas.edit');
Route::patch('/disciplinas/{disciplinaId}', [DisciplinaController::class, 'update'])->name('disciplinas.update');

// Department Routes
Route::get('/deptos', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos/{depto}/show', [DeptoController::class, 'show'])->name('deptos.show');


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
