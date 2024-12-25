<?php

use App\Http\Controllers\AcademyController;
use App\Http\Controllers\CohortController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Models\Academy;
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

    Route::post('/users/store', [UserController::class, 'store'])->name('user.store');
Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/users/{id}', [UserController::class, 'update'])->name(name: 'user.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.delete');

Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/students/{id}', [StudentController::class, 'update'])->name(name: 'student.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('student.delete');


Route::post('/academies/store', [AcademyController::class, 'store'])->name('academy.store');
Route::get('/academies/create', [AcademyController::class, 'create'])->name('academy.create');
Route::get('/academies', [AcademyController::class, 'index'])->name('academies');
Route::get('/academies/{id}/edit', [AcademyController::class, 'edit'])->name('academy.edit');
Route::delete('/academies/{id}', [AcademyController::class, 'destroy'])->name('academy.delete');
Route::put('/academies/{academy}', [AcademyController::class, 'update'])->name('academy.update');



Route::post('/Cohorts/store', [CohortController::class, 'store'])->name('cohort.store');
Route::get('/Cohorts/create', [CohortController::class, 'create'])->name('cohort.create');
Route::get('/Cohorts', [CohortController::class, 'index'])->name('cohorts');
Route::get('/Cohorts/{id}/edit', [CohortController::class, 'edit'])->name('cohort.edit');
Route::put('/Cohorts/{id}', [CohortController::class, 'update'])->name('cohort.update');
Route::delete('/Cohorts/{id}', [CohortController::class, 'destroy'])->name('cohort.delete');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::get('/visit/academies', [VisitController::class, 'index'])->name('watch.academies');

Route::get('/visit/academies/{academy}', [VisitController::class, 'showCohorts'])->name('academy.showCohorts');

Route::get('visit/cohort/{cohort}', [VisitController::class, 'showCohortWithStudents'])->name('watch.cohorts');


Route::get('/watch/home', function () {
    return view('home');
})->name('watch.home');



require __DIR__.'/auth.php';



