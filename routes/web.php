<?php

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
//Test
Route::get('/test', Function(){

    echo 'This Is Test Route';
});

//Test with parameter
Route::get('/test/{id}', function($id){
echo 'This Is Test Route With Id Parameter'.$id;
});

//Route with view
Route::get('test_vw', function(){
    $msg['hello'] = 'hello world';
    return view('/test.my_test_view', $msg);
});
    
//controller
use App\Http\Controllers\Testing;
Route::get('/testing', [Testing::class, 'home']);
Route::get('/testing/vw/{id}', [Testing::class, 'view']);
Route::get('/testing/form', [Testing::class, 'form']);

//route for login and sign up
Route::view('/login', 'login_form');
Route::view('/register', 'register_form');
Route::view('/success_register', 'success_register');
//route for Controller User
use App\Http\Controllers\User;
Route::post('/login_proccess', [User::class, 'login_proccess']);
Route::post('/signup_proccess', [User::class, 'signup_proccess']);
Route::get('/user', [User::class, 'home']);
Route::get('/user/{id}', [User::class, 'edit']);
Route::post('/user/{id}', [User::class, 'update']);
Route::get('/logout', [User::class, 'logout']);

//set Middleware for admin
use App\Http\Controllers\Staff;
Route::middleware(['admin_auth'])->group(function(){
    Route::get('/', [Staff::class, 'index']);
    //Route::post('/staff/{id}/edit', [Staff::class, 'edit']);
    Route::resource('staff', Staff::class);
});
use App\Http\Controllers\Clerk;
Route::middleware(['clerk_auth'])->group(function(){
    Route::get('/clerk', function(){
        return view('clerk.home');
    });
    Route::post('/clerk',[Clerk::class,'submit']);
});
