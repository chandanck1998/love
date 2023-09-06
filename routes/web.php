<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function(){
    Route::get('/login','login_view')->name('login');
    Route::get('/register','register_view')->name('register');
    Route::post('/login','login')->name('login');
    Route::post('/register','register')->name('register');
});

Route::group(['middleware' => ['auth', 'parent.permission']], function () {
    // Routes that only parents can access.
});