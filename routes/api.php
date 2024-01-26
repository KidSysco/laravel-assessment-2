<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hello', function () {
  return "Hello World!";
});

Route::get('/reverse-string', function (Request $request) {
  $reversed = strrev($request->input('string'));
  return $reversed;
});

Route::get('/users', function () {
    $users = User::all();
    return response()->json(['users' => $users]);
});

Route::get('/users/{id}', function ($id) {
    $user = User::find($id);

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    return response()->json(['user' => $user]);
});
