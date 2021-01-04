<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('customer.pages.home');
    }

    public function package()
    {
        return view('customer.pages.package');
    }

    public function gallery()
    {
        return view('customer.pages.gallery');
    }

    public function contact()
    {
        return view('customer.pages.contact');
    }
}