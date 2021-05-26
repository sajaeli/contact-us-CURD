<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContcatController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Using PHP callable syntax...
Route::get('/', [ContcatController::class, 'index'])->name('contcat.index');
Route::post('contcat.store', [ContcatController::class, 'store'])->name('contcat.store');
Route::get('contcat.create', [ContcatController::class, 'create'])->name('contcat.create');
Route::get('contcat.edit/{id}', [ContcatController::class, 'edit'])->name('contcat.edit');
Route::put('contcat.update/{id}', [ContcatController::class, 'update'])->name('contcat.update');
Route::delete('contcat.destroy/{id}', [ContcatController::class, 'destroy'])->name('contcat.destroy');