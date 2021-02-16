<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     // return view('welcome');
//     echo "Selamat Datang";
// });
// Route::get('/about', function () {
//     echo "Nama  : Reynaldi Ramadhani Eka Purnomo <br>";
//     echo "NIM   : 1941720142";
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan Id '.$id;
// });


Route::get('/index', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
