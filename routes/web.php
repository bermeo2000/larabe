<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;
use App\Http\Controllers\personController;
use App\Http\Controllers\equipoController;
use App\Http\Controllers\equiController;
use App\Http\Controllers\ventController;
use App\Http\Controllers\ventaController;
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

Route::post('personas/store' ,[personController::class,'guardar' ]);
Route::get('persona' ,[personaController::class,'index' ]);
Route::get('personal{id}' ,[personController::class,'personal' ]);
Route::post('edipersona{id}' ,[personController::class,'edipersona' ]);

Route::post('equipos/guardar' ,[equiController::class,'guardar' ]);
Route::get('equipos' ,[equipoController::class,'indexe' ]);
Route::get('equip{id}' ,[equiController::class,'equip' ]);
Route::post('ediequipo{id}' ,[equiController::class,'ediequipo' ]);

Route::post('venta/guardar' ,[ventController::class,'guardar' ]);
Route::get('venta' ,[ventaController::class,'inde' ]);
Route::get('vent{id}' ,[ventController::class,'vent' ]);
Route::post('ediventa{id}' ,[ventController::class,'ediventa' ]);


