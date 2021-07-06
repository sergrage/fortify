<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth', 'verified'])->get('/dashboard', function(){
   return view('dashboard');
})->name('dashboard');

Route::middleware(['auth', 'verified'])->get('/profile', function(){
   return view('profile');
})->name('profile');


//Route::get('user-is-auth', [App\Http\Controllers\AuthCheckController::class, 'authCheck']);
Route::get('user-is-auth', fn() => Auth::check() ? 1 : 0);


Route::get('/test', [App\Http\Controllers\AuthCheckController::class, 'test'])->name('test');
Route::middleware(['auth'])->get('/verify-email', fn() => view('auth.verify-email'))->name('verify-email');

Route::fallback(function() {
    abort(404);
});
