<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\TestamentoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\VersiculoController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
     
    Route::apiResources([
        'testamento' => TestamentoController::class,
        'livro' => LivroController::class,
        'versiculo' => VersiculoController::class,
    ]);
});
Route::post("/login", [AuthController::class, 'login']);
Route::post("/register", [AuthController::class, 'register']);


