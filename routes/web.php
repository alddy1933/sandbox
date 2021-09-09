<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;

use App\Models\Major;

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

Route::get('/', function () {
    $data = ['title' => 'Beranda'];
    return view('home.index', $data);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/post/{post}', [PostController::class, 'show']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{student}', [StudentController::class, 'show']);

Route::get('/majors', [MajorController::class, 'index']);
Route::get('/major/{major:slug}/students', [MajorController::class, 'studentList']);
Route::get('/major/{major:slug}/info', [MajorController::class, 'info']);

Route::get('/about', [AboutController::class, 'index']);
