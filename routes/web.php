<?php

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


use App\Http\Controllers\Controllersample;

Route::get('login', [Controllersample:: class, 'login'])->name('login');

Route::post('login', [Controllersample:: class, 'LoginTrigfunc'])->name('logintrigname');

Route::post('register', [Controllersample:: class, 'Register'])->name('Sampleregister');

Route::get('Dashboard', [Controllersample:: class, 'dashboard'])->name('Dashboard');

Route::get('delete/{id}', [Controllersample:: class, 'delete_id']);

Route::post('Dashboard', [Controllersample:: class, 'Products'])->name('Sampleproducts');

Route::get('logout', [Controllersample:: class, 'logout'])->name('Logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
