<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngredientController;

use App\Http\Controllers\RecipeController;


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


Route::get('/ingredients', [IngredientController::class,'index']);
Route::post('/recipes',[RecipeController::class,'save']);
Route::get('/recipe/{id}',[RecipeController::class,'fetch']);
Route::post('/recipes/preview', [RecipeController::class, 'preview']);