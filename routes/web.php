<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\pegawaiControllers;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentControllers;
use App\Http\Controllers\ClassController;
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

Route::get('/', [StudentControllers::class, 'index']);

Route::get('/class', [ClassController::class,'index']);

Route::get('/halaman-teacher', [TeacherController::class,'index']);

Route::get('/bljr',[StudentControllers::class,'index']);
Route::get('/students-store',[StudentControllers::class,'store'])->name('student.store');
Route::get('/students-update',[StudentControllers::class,'update'])->name('student.update');
Route::get('/students-destroy',[StudentControllers::class,'destroy'])->name('student.destroy');
Route::get('/pgwi',[pegawaiControllers::class,'index']);
Route::get('/pegawai-store',[pegawaiControllers::class,'store'])->name('pegawai.store');
Route::get('/pegawai-update',[pegawaiControllers::class,'update'])->name('pegawai.update');
Route::get('/pegawai-destroy',[pegawaiControllers::class,'destroy'])->name('pegawai.destroy');