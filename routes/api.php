<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user-list', [UserController::class, 'index']);
Route::get('/filter-user-list', [UserController::class, 'UserList']);
