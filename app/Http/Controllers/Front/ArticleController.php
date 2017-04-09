<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function howToListen()
    {
        return view('front.articles.howToListen');
    }

    public function about()
    {
        return view('front.articles.about');
    }
}
