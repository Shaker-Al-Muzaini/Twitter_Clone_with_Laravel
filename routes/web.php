<?php

use App\Http\Controllers\TweetController;
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


Route::get('/',[TweetController::class,'index'])->name('home');
Route::post('/tweets', [\App\Http\Controllers\TweetController::class, 'store'])->name('tweets.store');
Route::delete('/tweets/{id}', [\App\Http\Controllers\TweetController::class, 'destroy'])->name('tweets.destroy');


require __DIR__.'/auth.php';
