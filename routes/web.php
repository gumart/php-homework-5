<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PalindromeController, MyIPController};

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

Route::get('/phpinfo/', function () {
    return phpinfo();
});

Route::get('/palindrome/', [PalindromeController::class, 'isPalindrome'])->middleware('ipValidation');

Route::get('/myip/', [MyIPController::class, 'getMyIP']);
