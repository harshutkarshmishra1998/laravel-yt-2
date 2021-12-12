<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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

Route::view('/login', 'pages.data');
// Route::get('/users', [DataController::class, 'testRequest']); //get method - the data goes through url
// Route::post('/users', [DataController::class, 'testRequest']); //here we redirect when login is successful
// Route::put('/users', [DataController::class, 'testRequest']);
Route::delete('/users', [DataController::class, 'testRequest']);
