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

use App\Http\Controllers\SampleController;

Route::get('/laravelsample', [SampleController::class, 'index']);
Route::get('/laravelsample/create', [SampleController::class, 'create']);
Route::post('/laravelsample', [SampleController::class, 'store']); // POST
// Show at last for route rank so create will not be as ID bellow
Route::get('/laravelsample/{id}', [SampleController::class, 'show']);
Route::delete('/laravelsample/{id}', [SampleController::class, 'destroy']); // DELETE
