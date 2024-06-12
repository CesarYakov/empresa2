<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;

Route::view('/', 'home')->name('home');
Route::get('persona', [PersonasController::class, 'index'])->name('persona');
Route::view('contacto', 'contacto')->name('contacto');
// Route::view('nosotros','nosotros')->name('nosotros');

// Route::view('servicios','ServiciosController@index')->name('servicios.index');
// Route::view('servicios/{id}','ServiciosController@show')->name('servicios.show');

##Route::get('servicios', "App\Http\Controllers\ServiciosController@index")->name('servicios');
// Route::view('contacto','contacto')->name('contacto');
// Route::view('contacto','ContactoController@store');
