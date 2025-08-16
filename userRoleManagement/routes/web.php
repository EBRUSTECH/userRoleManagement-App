<?php

use App\Http\Controllers\UserController;
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


// build a multi-roles system (admin, managers and users) admin can manage all users.
// Managers can manage users in their departments. Users can only update their profiles.
// You must design this using service repository pattern. Test requiremnets: Define a
// user repo interface. Find user by ID, get user by department, create user service that
// implements the methods. Write a unit test for the method that update and create user profile.
// Create a form where you can create a user where you can assign a role.
// Ensure to use Laravel request to handle validaation

Route::get('/', function () {
    return view('welcome');
});

Route::post('/users/create', [UserController::class, 'create'])->name('create.user');
Route::get('/users', [UserController::class, 'getUserbyId'])->name('single.user');

Route::get('/user', 'UserController@index')->name('user');
