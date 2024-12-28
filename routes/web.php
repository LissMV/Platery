<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

Route::get('/benefits', function () {
    return view('beneficios');
})->name('benefits');

Route::get('/contactus', function () {
    return view('contáctanos');
})->name('contactus');

Route::get('/functionP', function () {
    return view('funcionamiento');
})->name('functionP');

Route::get('/campero', function () {
    return view('campero');
})->name('campero');


Route::get('/pagos', function () {
    return view('pagoprueba');
})->name('pagos');

Route::get('/carrito.html', function () {
    return view('carrito');
})->name('carrito');

Route::get('/pago.html', function () {
    return view('pagofinal');
})->name('pagofinal');

Route::get('/dashboard2', function () {
    return view('dashboard2');
})->name('dashboard2');

Route::get('/ensaladacompra', function () {
    return view('ensaladacompra');
})->name('ensaladacompra');

Route::get('/cheesecakecompra', function () {
    return view('cheesecakecompra');
})->name('cheesecakecompra');
