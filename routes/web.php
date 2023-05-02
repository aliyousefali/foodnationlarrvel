<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\EducationalAdministrationController;
use App\Http\Controllers\EducationStageController;
use App\Http\Controllers\ContractorController;
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


Route::get('/',[MealController::class,'index']);

Route::get('Meal-List',[MealController::class,'index']);
Route::get('Add-Meal',[MealController::class,'add']);
Route::post('Save-Meal',[MealController::class,'save']);
Route::get('Edit-Meal/{id}',[MealController::class,'edit']);
Route::post('Update-Meal',[MealController::class,'update']);
Route::get('Delete-Meal/{id}',[MealController::class,'delete']);

Route::get('Government-List',[GovernmentController::class,'index']);
Route::get('Add-Government',[GovernmentController::class,'add']);
Route::post('Save-Government',[GovernmentController::class,'save']);
Route::get('Edit-Government/{id}',[GovernmentController::class,'edit']);
Route::post('Update-Government',[GovernmentController::class,'update']);
Route::get('Delete-Government/{id}',[GovernmentController::class,'delete']);

Route::get('EducationalAdministration-List',[EducationalAdministrationController::class,'index']);
Route::get('Add-EducationalAdministration',[EducationalAdministrationController::class,'add']);
Route::post('Save-EducationalAdministration',[EducationalAdministrationController::class,'save']);
Route::get('Edit-EducationalAdministration/{id}',[EducationalAdministrationController::class,'edit']);
Route::post('Update-EducationalAdministration',[EducationalAdministrationController::class,'update']);
Route::get('Delete-EducationalAdministration/{id}',[EducationalAdministrationController::class,'delete']);

Route::get('EducationStage-List',[EducationStageController::class,'index']);
Route::get('Add-EducationStage',[EducationStageController::class,'add']);
Route::post('Save-EducationStage',[EducationStageController::class,'save']);
Route::get('Edit-EducationStage/{id}',[EducationStageController::class,'edit']);
Route::post('Update-EducationStage',[EducationStageController::class,'update']);
Route::get('Delete-EducationStage/{id}',[EducationStageController::class,'delete']);

Route::get('Contractor-List',[ContractorController::class,'index']);
Route::get('Add-Contractor',[ContractorController::class,'add']);
Route::post('Save-Contractor',[ContractorController::class,'save']);
Route::get('Edit-Contractor/{id}',[ContractorController::class,'edit']);
Route::post('Update-Contractor',[ContractorController::class,'update']);
Route::get('Delete-Contractor/{id}',[ContractorController::class,'delete']);
