<?php

namespace App\Http\Controllers;

class ArticlesController extends Controller
{
    public function howToListen()
    {
        return view('front.articles.how-to-listen');
    }

    public function about()
    {
        return view('front.articles.about');
    }
}
