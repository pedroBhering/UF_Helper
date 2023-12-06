<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\CommentController;

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
Route::get('/materiais/{disciplina_id}', [MaterialController::class, 'index'])->name('materiais.index');
Route::get('/materiais/{material_id}/show', [MaterialController::class, 'show'])->name('materiais.show');

Route::get('/materiais/{disciplina_id}/create', [MaterialController::class, 'create'])->name('materiais.create');
Route::post('/materiais/{disciplina_id}', [MaterialController::class, 'store'])->name('materiais.store');
Route::get('/materiais/{material_id}/edit', [MaterialController::class, 'edit'])->name('materiais.edit');
Route::patch('/materiais/{material_id}', [MaterialController::class, 'update'])->name('materiais.update');
Route::delete('/materiais/{material_id}', [MaterialController::class, 'destroy'])->name('materiais.destroy');

// Disciplina Routes
Route::get('/disciplinas', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/disciplinas/{disciplina_id}/show', [DisciplinaController::class, 'show'])->name('disciplinas.show');
Route::get('/disciplinas/{depto_id}/create', [DisciplinaController::class, 'create'])->name('disciplinas.create');
Route::post('/disciplinas/{depto_id}', [DisciplinaController::class, 'store'])->name('disciplinas.store');
Route::get('/disciplinas/{disciplina_id}/edit', [DisciplinaController::class, 'edit'])->name('disciplinas.edit');
Route::patch('/disciplinas/{disciplina_id}', [DisciplinaController::class, 'update'])->name('disciplinas.update');
Route::delete('/disciplinas/{disciplina_id}', [DisciplinaController::class, 'destroy'])->name('disciplinas.destroy');

Route::get('/disciplinas/{disciplina_id}/materiais', [DisciplinaController::class, 'materiais'])->name('disciplinas.materiais');

// Department Routes
Route::get('/deptos', [DeptoController::class, 'index'])->name('deptos.index');
Route::get('/deptos/{depto_id}/show', [DeptoController::class, 'show'])->name('deptos.show');

Route::get('/comments/{material_id}/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments/store/{material_id}', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';
