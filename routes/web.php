<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
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
    return view('Meal-List');
});
Route::get('Meal-List',[MealController::class,'index']);
Route::get('Add-Meal',[MealController::class,'add']);
Route::post('Save-Meal',[MealController::class,'save']);
Route::get('Edit-Meal/{id}',[MealController::class,'edit']);
Route::post('Update-Meal',[MealController::class,'update']);
Route::get('Delete-Meal/{id}',[MealController::class,'delete']);


