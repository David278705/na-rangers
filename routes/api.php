<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExampleController;
use App\Http\Controllers\RegistrationController;

// Ruta de prueba
Route::get('/test', function () {
    return response()->json([
        'message' => 'API funcionando correctamente',
        'app' => 'NA Rangers',
        'version' => '1.0.0'
    ]);
});

// Registration routes
Route::post('/registrations', [RegistrationController::class, 'store']);
Route::get('/registrations', [RegistrationController::class, 'index']);
Route::get('/registrations/export/excel', [RegistrationController::class, 'exportExcel']);
Route::get('/registrations/{id}', [RegistrationController::class, 'show']);
Route::get('/registrations/{id}/voucher', [RegistrationController::class, 'downloadVoucher']);

// Rutas de ejemplo CRUD
Route::apiResource('items', ExampleController::class);

// Ruta protegida con Sanctum (requiere autenticación)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
