<?php

use App\Http\Controllers\Todos;
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

Route::get('/', [Todos::class, 'index']);
Route::get('/criar', [Todos::class, 'create']);
Route::post('/salvar', [Todos::class, 'store']);