<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminnPageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminQualificationController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AppStatusController;
use App\Http\Controllers\EditQualificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserHomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class, 'index']);

Route::get('/', fn () => redirect('user/applicant/create'));

Route::resource('home', HomeController::class)
    ->only('index');


// Route::resource('applicant', ApplicantController::class)
//     ->only('index', 'create', 'store');


Route::prefix('user')
    ->name('user.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('applicant', ApplicantController::class);
    });





Route::prefix('user')
    ->name('user.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('home', UserHomeController::class)
            ->parameter('home', 'addjob');
    });







Route::get('login', [AdminController::class, 'create'])
    ->name('login');
Route::post('login', [AdminController::class, 'store'])
    ->name('login.store');;
Route::delete('logout', [AdminController::class, 'destroy'])
    ->name('logout');;







Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('page', AdminPageController::class)
            ->only('index', 'show', 'edit', 'store', 'update', 'destroy')
            ->parameter('page', 'applicant');
    });








Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('home', AdminHomeController::class)
            ->only('index', 'create', 'store', 'show');
        Route::resource('jobs', JobController::class)
            ->parameter('jobs', 'addjob');
        Route::resource('app-status', AppStatusController::class);
    });










Route::prefix('admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::resource('qualification', EditQualificationController::class)
            ->only('index', 'show', 'create', 'store', 'edit', 'update', 'destroy')
            ->parameter('qualification', 'editqualification');
    });
