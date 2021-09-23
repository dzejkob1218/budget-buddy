<?php

use App\Http\Controllers\CategoryController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    # TEMPORARILY ALWAYS LOGIN TEST USER
    Auth::login(User::find(1));
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

# TODO: Group the routes into one auth middleware
Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/categories', [CategoryController::class, 'store'])->middleware('auth');
Route::delete('/categories', [CategoryController::class, 'destroy'])->middleware('auth');

Route::get('/add', [\App\Http\Controllers\ReceiptController::class, 'create'])->middleware('auth');
Route::post('/remember', [\App\Http\Controllers\ReceiptController::class, 'remember'])->middleware('auth');
Route::post('/store', [\App\Http\Controllers\ReceiptController::class, 'store'])->middleware('auth');
Route::post('/expense', [\App\Http\Controllers\ExpenseController::class, 'remember'])->middleware('auth');


Route::get('/stats', function () {
    return view('pages.collapse-test');
});


require __DIR__ . '/auth.php';
