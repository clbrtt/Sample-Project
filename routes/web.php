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


Route::get('login', [Controllersample:: class, 'Login'])->name('testlogin');

Route::post('login', [Controllersample:: class, 'LoginTrigfunc'])->name('logintrigname');

Route::post('register', [Controllersample:: class, 'Register'])->name('Sampleregister');

Route::middleware('auth:admin')->group(function(){
    Route::get('dashboard', [Dashboardcontroller:: class, 'admindashboard']);
    Route::get('edit/{id}',[Dashboardcontroller:: class, 'edit_prod']);
    Route::post('update-table/{id}', [Dashboardcontroller:: class, 'update']);
    Route::get('logout', [Dashboardcontroller:: class, 'logout'])->name('Logout');
    Route::get('/search/{text}', [Dashboardcontroller::class, 'searchProduct']);
});

Route::post('dashboard', [Dashboardcontroller:: class, 'Products'])->name('Sampleproducts');

Route::get('delete/{id}', [Dashboardcontroller:: class, 'delete_id']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

