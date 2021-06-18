<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanaderoController;
use App\Http\Controllers\PanController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/panadero', function () {
//     return view('panadero.indexPanadero');
// });

// Route::get('/pan', function () {
//     return view('pan.indexPan');
// }); 

// Route::get('/panadero/createPanadero',[PanaderoController::class,'createPanadero']);
// Route::get('/pan/createPan',[PanController::class,'createPan']);

Route::resource('panadero',PanaderoController::class);
Route::resource('pan',PanController::class);

