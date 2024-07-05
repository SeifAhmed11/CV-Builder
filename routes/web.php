<?php

use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ResumeController;
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
    return view('main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('user-detail', UserDetailController::class)->middleware('auth');

Route::resource('education', EducationController::class)->middleware('auth');

Route::resource('experiences', ExperiencesController::class)->middleware('auth');

Route::resource('skill', SkillController::class)->middleware('auth');

Route::get('resume', [ResumeController::class,'index'])->middleware('auth')->name('resume.index');

Route::get('resume/download', [ResumeController::class,'download'])->middleware('auth')->name('resume.download');
