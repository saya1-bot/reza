<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PemogramanController;
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

Route::get('/pemograman',[PemogramanController::class,'index']); 
Route::get('/pemograman/create',[PemogramanController::class,'create']); 
Route::post('/pemograman/store',[PemogramanController::class,'store']); 
Route::get('/pemograman/{id}/edit',[PemogramanController::class,'edit']); 
Route::put('/pemograman/{id}',[PemogramanController::class,'update']); 
Route::delete('/pemograman/{id}',[PemogramanController::class,'destroy']); 

