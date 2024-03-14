<?php

use App\Http\Controllers\FiliereController;
use App\Http\Controllers\OptionController;
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
