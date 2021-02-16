<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;


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

//PRAKTIKUM 1
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


//PRAKTIKUM 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// PRAKTIKUM 3
// Halaman Home
Route::get('/', [HomeController::class, 'index']);

//Menampilkan Daftar Produk(Prefix)
Route::prefix('category') -> group(function(){
    Route::get('/marbel-edu-games',[ProductController::class,'marbeledugames']);
    Route::get('/marbel-and-friends-kids-gammes',[ProductController::class,'marbelandfriendskidsgame']);
    Route::get('/riri-story-books',[ProductController::class,'riristorybook']);
    Route::get('/kolak-kids-songs',[ProductController::class,'kolakkisdsongs']);
});

//Halaman News
Route::get('/news',[NewsController::class,'news']);
Route::get('/news/{parameter}',function($parameter){
    return redirect('https://www.educastudio.com/news/'.$parameter);
});

//Route Prefix Program
Route::prefix('category') -> group(function(){
    Route::get('/karir',[ProgramController::class,'karir']);
    Route::get('/magang',[ProgramController::class,'magang']);
    Route::get('/kunjungan-industri',[ProgramController::class,'kunjunganindstri']);
   
});

//Route Halaman ABout Us
Route::get('/about-us', [PageController::class, 'aboutus']);

//Halaman Contact Us
Route::get('contact-us',function(){
    return redirect('https://www.educastudio.com/contact-us ');
});

