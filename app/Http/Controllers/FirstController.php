<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('mains.index');
    }

    public function howBuy()
    {
        return view('mains.howBuy');
    }

    public function news()
    {
        return view('mains.news.news');
    }

    public function support()
    {
        return view('mains.index');
    }

    public function reviews()
    {
        return view('mains.reviews');
    }




}
