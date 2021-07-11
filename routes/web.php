<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbclassController;

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

Route::get('/', [DbclassController::class, 'index']);
Route::get('/add', [DbclassController::class, 'add']);
Route::post('/add', [DbclassController::class, 'create']);
Route::get('/edit', [DbclassController::class, 'edit']);
Route::post('/edit', [DbclassController::class, 'update']);