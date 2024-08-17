<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilController;
use App\Http\Controllers\p9Controller;




Route::get('/p9',[p9Controller::class, 'show'])->name('p9');
Route::get('/nil', [NilController::class, 'show'])->name('nil');


Route::get('/', function () {
    return view('home.index');
});
Route::get('/nil', function () {
    return view('home.nil');
})->name('nil');
  
Route::get('/p9', function () {
    return view('home.p9');
})->name('p9');


// Route::get('/nil', function () {
//     return view('home.nil');
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
