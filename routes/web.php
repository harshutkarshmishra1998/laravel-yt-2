<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\UserAuthController;

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

// Route::get('/users', [DataController::class, 'index']);

// Route::view('/login', 'pages.data');
// Route::get('/users', [DataController::class, 'testRequest']); //get method - the data goes through url
// Route::post('/users', [DataController::class, 'testRequest']); //here we redirect when login is successful
// Route::put('/users', [DataController::class, 'testRequest']);
// Route::delete('/users', [DataController::class, 'testRequest']);

Route::view('/login', 'pages.data');
Route::post('/users', [UserAuthController::class, 'userLogin']);

Route::get('/login', function () {
    if (session()->has('username')) {
        return redirect('/profile');
    }
    // return redirect('/login');
    return view('pages.data');
});

Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->pull('username', null);
    }
    return redirect('login');
});
