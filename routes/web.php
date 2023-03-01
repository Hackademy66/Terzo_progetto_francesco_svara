<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RecipeController;

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

// Route PublicController
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('chi-siamo');
Route::get('/contact', [PublicController::class, 'contact'])->name('contatti');
Route::get('/services', [PublicController::class, 'services'])->name('servizi');

// Route RecipeController
Route::get('/recipes', [RecipeController::class, 'recipe_index'])->name('ricette');
Route::get('/recipes/dettaglio/{id}', [RecipeController::class, 'recipe_show'])->name('recipes-dettaglio');