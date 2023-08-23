<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Auth;
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
// Default Route
Route::get('/', function () {
    return view('welcome');
});


Route::get('/laravelsample', [SampleController::class, 'index'])->name('samples.index')->middleware('auth'); // this route AUTH
Route::get('/laravelsample/create', [SampleController::class, 'create'])->name('samples.create');
Route::post('/laravelsample', [SampleController::class, 'store'])->name('samples.store'); // POST
// Show at last for route rank so create will not be as ID bellow
Route::get('/laravelsample/{id}', [SampleController::class, 'show'])->name('samples.show')->middleware('auth'); // this route AUTH
Route::delete('/laravelsample/{id}', [SampleController::class, 'destroy'])->name('samples.destroy')->middleware('auth'); // this route AUTH

Auth::routes([
    'register' => false, // disable Redister option from AUTH
]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




