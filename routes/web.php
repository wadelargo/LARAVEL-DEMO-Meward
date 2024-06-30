<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\TrainorController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [SiteController::class, 'home']);

Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/create', [UsersController::class,'create']);
Route::post('/users/create',[UsersController::class,'store']);
Route::get('/users/{user}',[UsersController::class,'edit']);
Route::post('/users/{user}',[UsersController::class,'update']);
Route::delete('users/delete/{user}', [UsersController::class, 'delete']);

Route::get('/trainors', [TrainorController::class, 'index'])->name('trainors');
Route::get('/trainors/create', [TrainorController::class, 'create']);
Route::post('/trainors/create', [TrainorController::class, 'store']);

Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('/trainees', [TraineeController::class, 'index'])->name('trainees');

