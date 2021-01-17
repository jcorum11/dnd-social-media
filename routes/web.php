<?php

use Illuminate\Support\Facades\Route;
use App\Models\Log;

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
    return view('home');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/players', function () {
    return view('players');
});

Route::get('/log', function () {
    return view("log", ["logs" => App\Models\Log::latest()->get()]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
