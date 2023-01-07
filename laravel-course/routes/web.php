<?php

use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact', ['array'=> ['User' , 'Admin' , 'Publisher']]);
});

Route::get('/admin', function () {
    return view('admin.test', [TestController::class , 'test' ]);
});

Route::get('/register' , [\App\Http\Controllers\RegisterController::class, 'register']);
Route::post('/register' , [\App\Http\Controllers\RegisterController::class, 'register']);

