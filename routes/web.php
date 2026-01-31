<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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
//
Route::post('/quiz10/store', [QuizController::class, 'quiz10_store'])->name('quiz10_store');

Route::get('/quiz10', [QuizController::class, 'quiz10_show']);

Route::post('/quiz9/{id}', [QuizController::class, 'quiz9_show'])->name('quiz9_test');

Route::get('/quiz8', [QuizController::class, 'quiz8_redirect']);

Route::get('/quiz7', [QuizController::class, 'quiz7_show'])->name('quiz7');

Route::get('/quiz6', [QuizController::class, 'quiz6_show'])->name('quiz6_test');

Route::get('/quiz3', [QuizController::class, 'show'])->name('quiz3');

// Route::get('/quiz4', [QuizController::class, 'quiz4_show'])->name('quiz4');

//Route::get('/quiz3', [App\Http\Controllers\QuizController::class, 'index']);

//Route::get('/test', [App\Http\Controllers\ExampleController::class, 'index']);

Route::get('/quiz11/all', [QuizController::class, 'quiz11_show_all']);

Route::get('/quiz11/get', [QuizController::class, 'quiz11_show_get']);

Route::get('/quiz12/{id}', [QuizController::class, 'quiz12_show'])->name('quiz12_test');

Route::post('/quiz12/update/{id}', [QuizController::class, 'quiz12_update'])->name('quiz12_update');

Route::get('/quiz12/delete/{id}', [QuizController::class, 'quiz12_delete'])->name('quiz12_test3');