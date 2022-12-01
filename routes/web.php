<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PraproposalController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [Controller::class, 'index'])->name('index');

Route::group(['middleware' => 'guest'], function () {
    Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
        Route::get('/', [LoginController::class, 'index'])->name('index');
        Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');
    });

    Route::group(['prefix' => 'register', 'as' => 'register.'], function () {
        Route::get('/', [RegisterController::class, 'index'])->name('index');
        Route::post('/', [RegisterController::class, 'register'])->name('store');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'praproposal', 'as' => 'praproposal.'], function () {
        Route::get('create', [PraproposalController::class, 'create'])->name('create');
        Route::post('/', [PraproposalController::class, 'store'])->name('store');
        Route::get('status', [PraproposalController::class, 'status'])->name('status');
        Route::get('/pdf', [PraproposalController::class, 'generatePDF'])->name('pdf');
    });
});
