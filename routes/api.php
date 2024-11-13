<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('fakultas', [FakultasController::class, 'getFakultas'])->middleware('auth:sanctum');

Route::get('prodi', [ProdiController::class, 'getProdi'])->middleware('auth:sanctum');
Route::get('mahasiswa', [MahasiswaController::class, 'getMahasiswa'])->middleware('auth:sanctum');;

Route::post('fakultas', [FakultasController::class, 'storeFakultas']);
Route::post('prodi', [ProdiController::class, 'storeProdi']);

Route::delete('fakultas/{id}',[FakultasController::class,'destroyFakultas']);

Route::post('login', [AuthContoller::class, 'login']);