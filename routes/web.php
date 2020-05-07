<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return view('welcome');
});

Route::get('login', function() {return view('/frontend/auth/login');
});

Route::get('register', function() {return view('/frontend/auth/register');
});

Route::get('bookmark', function() {return view('/frontend/bookmark');
});

Route::get('/test', function() {return view('/frontend/test');
});

Route::get('friends', function() {return view('/frontend/friends');
});

Route::get('mail', function() {return view('/frontend/mail');
});

Route::get('settings', function() {return view('/frontend/settings');
});

Route::get('home', function() {return view('/frontend/home');
});