<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

Route::get('/', [todosController::class, 'index'])->name("todo.home");
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//Edit todo route
Route::get('/edit/{id}',[todosController::class,'edit'])->name("todo.edit");

//Delete todo route
Route::get('/delete/{id}', [todosController::class,'delete'])->name("todo.delete");

//Update todo route
Route::post('/update', [todosController::class,'updateData'])->name("todo.updateData");

//create todo route
Route::post('/create', [todosController::class,'store'])->name("todo.store");
