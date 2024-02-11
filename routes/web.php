<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Chat;
use App\Livewire\SetNickname;

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

Route::get('/channel/{channel}', Chat::class)->middleware('NicknameMiddleware')->name('channel');
Route::get('/nickname', SetNickname::class)->name('start');

Route::get('/', function(){
    return abort(404);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

#require __DIR__.'/auth.php';
