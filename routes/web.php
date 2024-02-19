<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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

Route::get('/index', [SongController::class,'index'])->name('home'); // we need to pass data from the create form to the index page in order to show it 
Route::get('/index/{songdetails}/song',[SongController::class,'contenu'])->name('song');
Route::get('/index/share',[SongController::class,'addsong'])->name('create');
Route::post('/index',[SongController::class,'store'])->name('store');
