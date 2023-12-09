<?php

use App\Http\Controllers\EkstracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get("/", [EkstracurricularController::class, "showAllEkstracurriculars"])->middleware('auth')->name('viewEkstracurricular');
Route::get("/ekstracurricular/create", [EkstracurricularController::class, "create"])->middleware('auth')->name('ekstracurricular.create');
Route::post("/ekstracurricular/store", [EkstracurricularController::class, "store"])->middleware('auth')->name('ekstracurricular.store');
Route::get("/ekstracurricular/edit/{ekstracurricular}", [EkstracurricularController::class, "edit"])->middleware('auth')->name('ekstracurricular.edit');
Route::put("/ekstracurricular/update/{ekstracurricular}", [EkstracurricularController::class, "update"])->middleware('auth')->name('ekstracurricular.update');
Route::delete("/ekstracurricular/destroy/{ekstracurricular}", [EkstracurricularController::class, "destroy"])->middleware('auth')->name('ekstracurricular.destroy');
Route::get("/student", [StudentController::class,"showAllStudents"])->middleware('auth')->name('viewStudent');

Route::group([
    'middleware' => 'admin',
    // 'prefix' => 'admin',
    'as' => 'admin'
], function() {
    Route::get("/student/{id}", [AdminStudentController::class,"showStudentDetails"])->middleware('auth')->name('viewStudentDetails');    
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
