<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EdtController;
use App\Http\Controllers\NivoController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\EmploiController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\LesFilieres\BaController;
use App\Http\Controllers\LesFilieres\CeController;
use App\Http\Controllers\LesFilieres\CiController;
use App\Http\Controllers\LesFilieres\MpController;
use App\Http\Controllers\LesFilieres\TlController;
use App\Http\Controllers\LesFilieres\GrhController;
use App\Http\Controllers\LesFilieres\MgcController;
use App\Http\Controllers\LesFilieres\SegController;
use App\Http\Controllers\LesFilieres\DroitController;
use App\Http\Controllers\LesFilieres\FinanceController;

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

Route::get('/', function () {    return view('welcome');});

//Route pour modules
Route::resource('module', ModuleController::class);
//Route pour filiere
Route::resource('filieres', FiliereController::class);
//Route enseignant
Route::resource('enseignants', EnseignantController::class);
//Route emploi
Route::resource('seances', SeanceController::class);
//Route salle
Route::resource('salles', SalleController::class);
//Route groupe
Route::resource('groupes', GroupeController::class);

//Route pour emploi du temps utilisateurs
Route::resource('edt', EdtController::class);
Route::resource('nivo', NiveauController::class);
Route::resource('tl', TlController::class);
Route::resource('ce', CeController::class);
Route::resource('grh', GrhController::class);
Route::resource('ci', CiController::class);
Route::resource('droit', DroitController::class);
Route::resource('finance', FinanceController::class);
Route::resource('seg', SegController::class);
Route::resource('mgc', MgcController::class);
Route::resource('mp', MpController::class);
Route::resource('ba', BaController::class);
Route::resource('master', MasterController::class);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
