<?php

use App\Http\Controllers\QuestionsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('question',[QuestionsController::class,'index']);
Route::get('question/create',[QuestionsController::class,'create']);
Route::post('question/store',[QuestionsController::class,'store'])->name('question.store');
Route::get('question/show',[QuestionsController::class,'show'])->name('question.show');
Route::post('answer/store',[QuestionsController::class,'answer_store'])->name('question.answer_store');
