<?php
 
use App\Http\Controllers\UnitKerjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return "Dilah Canteq Sekali";
});

Route::get("/unit-kerja", [UnitKerjacontroller::class, "index"]);