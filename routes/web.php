<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TabuladorController;

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

Route::get('/', [TabuladorController::class, 'index'])->name('index');
Route::resource('/cadastro', TabuladorController::class);

Route::get('/api', 'apiController@index');




