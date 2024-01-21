<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaController;
use App\Http\Controllers\ExController;
use App\Http\Controllers\CommentController;
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
    /* 投稿関連のルーティング */
    Route::get('/paquestions/{paquestion}',[PaController::class, 'show']);
    Route::post('/paquestions/{paquestion}/comment',[PaController::class, 'comment']);
    Route::get('/exquestions/{exquestion}',[ExController::class, 'show']);
    Route::post('/exquestions/{exquestion}/comment',[ExController::class, 'comment']);
});

require __DIR__.'/auth.php';
