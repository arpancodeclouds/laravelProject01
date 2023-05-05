<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::middleware('loginCheck', function () {

    Route::get('/', function () {
        return view('login');
    })->name('loginpage');
// });
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/data', [UserController::class, 'get'])->name('home')->middleware('auth');
