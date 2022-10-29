<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\VilleController;

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

Route::get("/", [EtudiantController::class, "index"])->name("etudiant.index");
Route::get("/etudiants", [EtudiantController::class, "index"])->name("etudiant.index");
Route::get("/etudiants/create", [EtudiantController::class, "create"])->name("etudiant.create");
Route::post("/etudiants/create", [EtudiantController::class, "store"])->name("etudiant.create");
Route::get("/etudiants/show/{etudiant}", [EtudiantController::class, "show"])->name("etudiant.show");
Route::get("/etudiants/edit/{etudiant}", [EtudiantController::class, "edit"])->name("etudiant.edit");
Route::put("/etudiants/edit/{etudiant}", [EtudiantController::class, "update"])->name("etudiant.edit");
Route::get("/etudiants/destroy/{etudiant}", [EtudiantController::class, "destroy"])->name("etudiant.destroy");