<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
