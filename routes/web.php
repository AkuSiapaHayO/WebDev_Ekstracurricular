<?php

use App\Http\Controllers\EkstracurricularController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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
Route::get("/", [EkstracurricularController::class, "showAllEkstracurriculars"])->name('viewEkstracurricular');

Route::get("/viewStudent", [StudentController::class,"showAllStudents"])->middleware('auth')->name('viewStudent');
Route::get("/student/{id}", [StudentController::class,"showStudentDetails"])->middleware('auth')->name('viewStudentDetails');
// Route::group([
//     'middleware' => 'admin',
//     'prefix' => 'admin',
//     'as' => 'admin'
// ], function () {
// });

Route::get('/dashboard', function () {
    return view('dashboard');
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
