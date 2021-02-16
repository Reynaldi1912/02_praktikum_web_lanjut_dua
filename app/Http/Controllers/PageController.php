<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'Nama    : Reynaldi Ramadhani Eka purnomo <br> NIM   : 1941720142';
    }
    public function articles($id) {
        return 'Halaman Artikel dengan Id '.$id;
    }
    public function aboutus(){
        return redirect('https://www.educastudio.com/about-us');
    }
}
