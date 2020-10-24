<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front/index');
    }

    public function whats_on()
    {
        return view('front/whats_on');
    }

    public function whats_on_en()
    {
        return view('front/whats_on_en');
    }

    public function booking()
    {
        return view('front.booking');
    }
}
