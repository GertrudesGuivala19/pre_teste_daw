<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestauranteController;
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

Route::resource('/restaurante', RestauranteController::class);

Route::get('/restaurants/{id}', [RestaurantController::class, 'show']);

// Em routes/web.php
// Em routes/web.php ou routes/api.php
Route::post('/restaurants/{restaurant}/toggle-favorite', 'RestaurantController@toggleFavorite');

