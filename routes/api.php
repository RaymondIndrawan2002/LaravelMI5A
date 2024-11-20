<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('fakultas', [FakultasController::class, 'getFakultas'])->middleware(['auth:sanctum','ability:read']);

Route::get('prodi', [ProdiController::class, 'getProdi'])->middleware('auth:sanctum');

Route::get('mahasiswa', [MahasiswaController::class, 'getMahasiswa'])->middleware('auth:sanctum');;
Route::post('mahasiswa',[MahasiswaController::class,'storeMahasiswa']);

Route::post('fakultas', [FakultasController::class, 'storeFakultas'])->Middleware(['auth:sanctum','ability:create']);

Route::post('prodi', [ProdiController::class, 'storeProdi']);

Route::delete('fakultas/{id}',[FakultasController::class,'destroyFakultas']);

Route::post('login', [AuthContoller::class, 'login']);

Route::put('fakultas/{id}',[FakultasController::class,'updateFakultas'])->Middleware(['auth:sanctum','ability:update']);

