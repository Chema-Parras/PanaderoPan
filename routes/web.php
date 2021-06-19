<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanaderoController;
use App\Http\Controllers\PanController;


Route::get('/', function () {
    return view('auth.login');
});


// Route::get('/panadero', function () {
//     return view('panadero.indexPanadero');
// });

// Route::get('/pan', function () {
//     return view('pan.indexPan');
// }); 

// Route::get('/panadero/createPanadero',[PanaderoController::class,'createPanadero']);
// Route::get('/pan/createPan',[PanController::class,'createPan']);

Route::resource('panadero',PanaderoController::class)->middleware('auth');
Route::resource('pan',PanController::class)->middleware('auth');

Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\PanaderoController::class, 'index'])->name('home');
// Route::get('/homePan', [App\Http\Controllers\PanController::class, 'indexPan'])->name('homePan');

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/', [PanaderoController::class, 'index'])->name('home');

});