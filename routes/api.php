<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\clienteController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(clienteController::class)->group(function(){
    Route::get('/clientes','index');
    //Route::post('/cliente','store');
    Route::get('/cliente/{id}','show');
    Route::put('/cliente/{id}','update');
    Route::delete('/cliente/{id}','destroy');
});

Route::post('cliente', [clienteController::class, 'store']);