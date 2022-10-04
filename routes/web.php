<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::prefix('employee')->name('employee')->group(function () {
        Route::get('/', function () {
            return view('employee');
        })->name('');
        Route::get('/create', function () {
            return view('pages/employee/create');
        })->name('.create');
    });
    Route::get('/poli', function () {
        echo 'Hai Klinik';
    })->name('poli');
    Route::get('/report', function () {
        echo 'Hai Laporan';
    })->name('report');
});

require __DIR__ . '/auth.php';
