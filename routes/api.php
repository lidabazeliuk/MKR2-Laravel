<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;


Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::middleware('auth:api')->group(function () {
    Route::get('/students', [StudentController::class, 'index']);
});

Route::middleware(['auth:api', 'can:admin,editor'])->group(function () {
    Route::post('/students', [StudentController::class, 'store']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
