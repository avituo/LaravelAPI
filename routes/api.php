<?php

use App\Http\Controllers\StudentsApiController;
use App\Models\Student;

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

Route::get('/students', [StudentsApiController::class, 'index']);
Route::post('/students', [StudentsApiController::class, 'store']);
Route::put('/students/{student}', [StudentsApiController::class, 'update']);
Route::delete('/students/{student}', [StudentsApiController::class, 'destroy']);


