<?php

use Illuminate\Http\Request;
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

/**
 * Status route, should always return OK
 */

Route::get('status', function () {
    return 'OK';
});

/**
 * Authentication routes
 */

Route::get('/login', function (Request $request) {
    $token = $request->session()->token();
    return view('login', ['csrf_token' => $token]);
})->name('login');

Route::post('/auth', [\App\Http\Controllers\AuthController::class, 'authenticate']);


/**
 * Authenticated routes
 */

Route::get('/dashboard', function () {
    return 'OK';
})->middleware('auth');
