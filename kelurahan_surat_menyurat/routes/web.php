<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/add-user', [AdminController::class, 'create'])->name('admin.add_user');
    Route::post('/admin/add-user', [AdminController::class, 'store']);
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/surat/create', [SuratController::class, 'create']);
    Route::post('/surat/create', [SuratController::class, 'store']);
});

Route::middleware(['auth', 'role:kepala'])->group(function () {
    Route::get('/surat/verify', [SuratController::class, 'index']);
    Route::post('/surat/verify/{id}', [SuratController::class, 'verify']);
});


require __DIR__.'/auth.php';
