<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;
use App\Http\Controllers\personController;
use App\Http\Controllers\equipoController;
use App\Http\Controllers\equiController;
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
    return view('welcome');
});

Route::get('persona' ,[personaController::class,'index' ]);
Route::post('personas/store' ,[personController::class,'save' ]);
Route::get('equipos' ,[equipoController::class,'indexe' ]);
Route::get('equip{id}' ,[equiController::class,'equip' ]);
Route::post('ediequipo{id}' ,[equiController::class,'ediequipo' ]);


