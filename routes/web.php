<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/users",[userController::class,"loadAllUsers"] );
Route::get("/add/user",[userController::class,"loadAddUserForm"] );
Route::post("/add/user",[userController::class,"AddUser"])->name('AddUser');

Route::get('/edit/{id}',[userController::class,'loadEditForm']);
Route::post("/edit/user",[userController::class,"EditUser"])->name('EditUser');
Route::get('/delete/{id}',[userController::class,'deleteUser']);