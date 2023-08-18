<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

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

//初期表示画面
Route::get('/', [ApplicantController::class, 'index'])->name('index');
// Route::get('applicants/input', [ApplicantController::class, 'input']);
Route::get('/applicant/input', [ApplicantController::class, 'input'])->name('applicant.input');
Route::post('/applicant/store', [ApplicantController::class, 'store'])->name('applicant.store');
Route::get('/applicant/detail?id={id}', [ApplicantController::class, 'detail'])->name('applicant.detail');
