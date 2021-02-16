<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function marbeledugame(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    function marbelandfriendskidsgame(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games ');
    }
    function riristorybook(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    function kolakkisdsongs(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
