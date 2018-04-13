<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('about.about');
    }

    public function news()
    {
        return view('news.news');
    }

    public function newsShow()
    {
        return view('news.news-show');
    }

    public function product()
    {
        return view('product.product');
    }

    public function solution()
    {
        return view('solution.solution');
    }

    public function solutionShow()
    {
        return view('solution.solution-show');
    }
}
