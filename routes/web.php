<?php

use App\Http\Controllers\Pets\PetsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 */
use App\Http\Middleware\FirebaseAuth;

Route::middleware(FirebaseAuth::class)->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    //Route::get('/mis-mascotas', [PetsController::class, 'index'])->name('mascotas.index');
});

Route::get('/mis-mascotas', [PetsController::class, 'index'])->name('mascotas.index');
Route::get('/offline', function () {
    return view('offline');
});
Route::get('/mascotas_offline', function () {
    return view('pets.offline');
});

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::get('/metrics', function () {
    // Simula métricas estilo Prometheus
    return response("app_requests_total 42\napp_errors_total 0", 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/logs/latest', function () {
    return response()->json([
        ['timestamp' => now(), 'level' => 'INFO', 'message' => 'Todo bien'],
        ['timestamp' => now(), 'level' => 'ERROR', 'message' => 'Algo falló']
    ]);
});

require __DIR__.'/auth.php';
