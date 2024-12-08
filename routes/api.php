<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::middleware(['auth:sanctum','role:user'])->group(function () {
    Route::get('/test', function (Request $request){
        return response()->json("success", 200);
    });
});
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum')->name('logout');
