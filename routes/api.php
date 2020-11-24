<?php

use App\Http\Controllers\editEmployee;
use App\Http\Controllers\employees;
use App\Http\Controllers\Trash;
use Illuminate\Support\Facades\Route;

Route::resource('home', employees::class)->only(['index', 'store', 'destroy', 'update']);
Route::resource('editar/{id}', editEmployee::class)->only(['index']);
Route::resource('trash', Trash::class)->only('index');