<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// // //method get
// Route::get('/animals',[AnimalController::class,'index']);
// //method post
// Route::post('/animals',[AnimalController::class,'store']);
// //method put
// Route::put('/animals/{id}',[AnimalController::class,'update']);
// //method delete
// Route::delete('animals/{id}',[AnimalController::class,'destroy']);