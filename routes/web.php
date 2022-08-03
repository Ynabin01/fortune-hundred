<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class,'index']); 
Route::get('/aboutus',[HomeController::class,'aboutus']); 
Route::get('/services',[HomeController::class,'services']); 
Route::get('/studyabroad',[HomeController::class,'studyabroad']); 
Route::get('/testprepration',[HomeController::class,'testprepration']); 
Route::get('/gallery',[HomeController::class,'gallery']); 
Route::get('/contact',[HomeController::class,'contact']); 