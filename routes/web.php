<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllersample;
use App\Http\Controllers\Dashboardcontroller;

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


Route::get('login', [Controllersample:: class, 'login'])->name('login');

Route::post('login', [Controllersample:: class, 'LoginTrigfunc'])->name('logintrigname');

Route::post('register', [Controllersample:: class, 'Register'])->name('Sampleregister');

Route::get('Dashboard', [Dashboardcontroller:: class, 'admindashboard'])->name('Sampleproducts')->middleware('guest:admin');

Route::post('Dashboard', [Dashboardcontroller:: class, 'Products'])->name('Sampleproducts');

Route::get('delete/{id}', [Dashboardcontroller:: class, 'delete_id']);

Route::get('logout', [Dashboardcontroller:: class, 'logout'])->name('Logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

