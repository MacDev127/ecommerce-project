<?php

//Controllers
use App\Http\Controllers\ProductController;


use Illuminate\Support\Facades\Route;

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

// Route to show all products
Route::get('/products', [ProductController::class, 'index']);

// Route to show a single product
// Route::get('/products/{id}', [ProductController::class, 'show']);