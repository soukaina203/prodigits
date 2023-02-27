<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\corsIssue;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/', [ProductController::class,'index'])->middleware(corsIssue::class);
Route::post('/product', [ProductController::class,'store'])->middleware(corsIssue::class);
// Route::resource('products', ProductController::class);middleware(['handleCors'])

