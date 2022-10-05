<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\ClinicsController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::prefix('employee')->name('employee')->group(function () {
        Route::get('/create', function () {
            return view('pages/employee/create');
        })->name('.create');
        Route::controller(EmployeeController::class)->group(function () {
            Route::get('/', 'index')->name('');
            Route::get('/{id}', 'show')->name('.detail');
            Route::get('edit/{id}', 'edit')->name('.edit');
            Route::post('/store', 'store')->name('.store');
            Route::put('/update/{id}', 'update')->name('.update');
            Route::delete('/destroy/{id}', 'destroy')->name('.destroy');
        });
    });
    Route::prefix('clinic')->name('clinic')->group(function () {
        Route::controller(ClinicController::class)->group(function () {
            Route::get('/', 'index')->name('');
            Route::get('/create', 'create')->name('.create');
            Route::get('/{id}', 'show')->name('.detail');
            Route::get('/edit/{id}', 'edit')->name('.edit');
            Route::post('/store', 'store')->name('.store');
            Route::put('/update/{id}', 'update')->name('.update');
            Route::delete('/destroy/{id}', 'destroy')->name('.destroy');
        });
    });
    Route::prefix('schedule')->name('schedule')->group(function () {
        Route::controller(ScheduleController::class)->group(function () {
            Route::get('/', 'index')->name('');
            Route::get('/create', 'create')->name('.create');
            Route::get('/{id}', 'show')->name('.detail');
            Route::get('/edit/{id}', 'edit')->name('.edit');
            Route::post('/store', 'store')->name('.store');
            Route::put('/update/{id}', 'update')->name('.update');
            Route::delete('/destroy/{id}', 'destroy')->name('.destroy');
        });
    });
    Route::get('/report', function () {
        echo 'Hai Laporan';
    })->name('report');
});

require __DIR__ . '/auth.php';
