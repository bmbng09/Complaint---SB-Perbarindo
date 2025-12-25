<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ComplaintController as AdminComplaintController;

/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengaduan', [ComplaintController::class, 'create'])
    ->name('pengaduan');

Route::post('/pengaduan', [ComplaintController::class, 'store'])
    ->name('pengaduan.store');

/*
|--------------------------------------------------------------------------
| AUTH USER
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/complaints', [AdminComplaintController::class, 'index'])
            ->name('complaints');

        Route::get('/complaints/{complaint}', [AdminComplaintController::class, 'show'])
            ->name('complaints.show');

        Route::post('/complaints/{complaint}/status', [AdminComplaintController::class, 'updateStatus'])
            ->name('complaints.status');

        Route::get('/complaints/{complaint}/download/{type}', [AdminComplaintController::class, 'download'])
            ->name('complaints.download');

        Route::delete('/complaints/{complaint}',
[AdminComplaintController::class, 'destroy']
        )->name('complaints.destroy');

    });

require __DIR__.'/auth.php';
