<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route 
// Parameters & Dependency Injection
Route::get('/user/{id}', function(Request $request, $id) {
    return "user id is " . $id;
});

// Middleware 
Route::get('/midd', function() {
    return view('middleware');
})->middleware('EnsureTokenIsValid');


// CSRF 
// use Illuminate\Http\Request;
Route::get('/token', function(Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
    return $token;
});

// Route::get('/middleware', function() {
//     return view('/middleware');
// });



// Controller
Route::get('/user/{id}', [UserController::class, 'show']);



// URL Generation 

Route::get('/user/{id}', function($id) {
    $user = new User;
    $user = User::find($id);
    // echo url("/user/{$user->id}");
    // return url()->current();
    // return url()->previous();
    // return url()->full();
});


Route::get('/post/{id}', function ($id) {
    echo route('post.show', ['id' => 1]);     
})->name('post.show');

// Route::get('/set', [UserController::class, "setSession"]);
Route::get('/set/{key}', [UserController::class, "setSession"]);
Route::get('/get/{key}', [UserController::class, "retreiveSession"]);



// validation 
Route::resource('/post', PostController::class);
// Route::resource('/create-post', [PostController::class, 'create']);
// Route::get('/all-posts', [PostController::class, "index"]);

Route::get('/all', [PostController::class, 'index']);
Route::get("/create", [PostController::class, 'create']);