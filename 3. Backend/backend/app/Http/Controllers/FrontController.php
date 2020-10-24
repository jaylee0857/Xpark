<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller

{   public function nav()
    {
        return view('front/nav');
    }

    public function index()
    {
        return view('front/index');
    }

    public function tour_0()
    {
        return view('front/tour_0');
    }

    public function tour_F()
    {
        return view('front/tour_F');
    }

    public function life()
    {
        return view('front/life');
    }

    public function FAQ()
    {
        return view('front/FAQ');
    }

    public function shopCart()
    {
        return view('front/shopCart');
    }

    public function booking()
    {
        return view('front.booking');
    }
}
