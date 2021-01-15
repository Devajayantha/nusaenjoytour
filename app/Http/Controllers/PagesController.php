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

    public function halfdaywest()
    {
        return view('customer.pages.paket.halfdaywest');
    }

    public function halfdayeast()
    {
        return view('customer.pages.paket.halfdayeast');
    }

    public function halfdaysnor()
    {
        return view('customer.pages.paket.halfdaysnor');
    }

    public function onedayonenight()
    {
        return view('customer.pages.paket.1d1n');
    }

    public function onedayonenightsnor()
    {
        return view('customer.pages.paket.1d1n-snor');
    }

}
