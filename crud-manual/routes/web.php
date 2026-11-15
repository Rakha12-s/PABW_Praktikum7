<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
 return redirect()->route('kontaks.index'); // Halaman awal langsung
});
// CRUD Kontak dengan upload foto
Route::resource('kontaks', KontakController::class);
