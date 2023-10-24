<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\EditorController;
use App\Models\Editor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-books', [BookController::class, 'index']);

Route::get('/get-editor/{id}', [EditorController::class, 'show']);

Route::post('/store-book', [BookController::class, 'store']);