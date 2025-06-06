<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

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
    return view('welcomeMessage');
});

Route::resource('/groups', GroupController::class);
//Route::get('/groups/create', [GroupController::class, 'create']);
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('groups.students.store');
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('groups.students.create');
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('groups.students.show');
