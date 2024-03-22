<?php

<<<<<<< HEAD
use App\Http\Controllers\CoordonnerController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\InscripSolicitController;
=======
use App\Http\Controllers\FiliereController;
>>>>>>> 1a5d1b22 (Initial commit)
use App\Http\Controllers\OptionController;
use App\Http\Controllers\StagiaireController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FiliereController::class)->group(function(){
    Route::get('filiere', 'index')->name('filiere');
    Route::get('filiereAdd', 'addform')->name('filiereAddForm');
    Route::post('filiereaddprocess', 'addfiliere')->name('filiereAddProcess');
    Route::get('filiereUpdateForm', 'updateform')->name('filiereUpdateForm');
    Route::post('filiereUpdateProcess', 'updateProcess')->name('filiereUpdateProcess');
    Route::get('filiereDelete', 'delete')->name('filiereDelete');
});

Route::controller(OptionController::class)->group(function(){
    Route::get('option', 'index')->name('option');
    Route::get('optionAdd', 'addform')->name('optionAddForm');
    Route::post('optionaddprocess', 'addoption')->name('optionAddProcess');
    Route::get('optionUpdateForm', 'updateform')->name('optionUpdateForm');
    Route::post('optionUpdateProcess', 'updateProcess')->name('optionUpdateProcess');
    Route::get('optionDelete', 'delete')->name('optionDelete');
});

Route::controller(StagiaireController::class)->group(function(){
    Route::get('stagiaire', 'index')->name('stagiaire');
    Route::get('stagiaireAdd', 'addform')->name('stagiaireAddForm');
    Route::post('stagiaireddprocess', 'addstagiaire')->name('stagiaireAddProcess');
    Route::get('stagiaireUpdateForm', 'updateform')->name('stagiaireUpdateForm');
    Route::post('stagiaireUpdateProcess', 'updateProcess')->name('stagiaireUpdateProcess');
    Route::get('stagiaireDelete', 'delete')->name('stagiaireDelete');
});
<<<<<<< HEAD

Route::controller(CoordonnerController::class)->group(function(){
    Route::get('coordonnee', 'index')->name('coordonnee');
    Route::get('coordonneeUpdateForm', 'updateform')->name('coordonneeUpdateForm');
    Route::post('coordonneeUpdateProcess', 'updateProcess')->name('coordonneeUpdateProcess');
    Route::get('coordonneeDelete', 'delete')->name('coordonneeDelete');
});

Route::controller(DocumentController::class)->group(function(){
    Route::get('document', 'index')->name('document');
    Route::get('documentUpdateForm', 'updateform')->name('documentUpdateForm');
    Route::post('documentUpdateProcess', 'updateProcess')->name('documentUpdateProcess');
    Route::get('documentDelete', 'delete')->name('documentDelete');
});

Route::controller(InscripSolicitController::class)->group(function(){
    Route::get('inscripsolicit', 'index')->name('inscripsolicit');
    Route::get('inscripsolicitUpdateForm', 'updateform')->name('inscripsolicitUpdateForm');
    Route::post('inscripsolicitUpdateProcess', 'updateProcess')->name('inscripsolicitUpdateProcess');
    Route::get('inscripsolicitDelete', 'delete')->name('inscripsolicitDelete');
});
=======
>>>>>>> 1a5d1b22 (Initial commit)
