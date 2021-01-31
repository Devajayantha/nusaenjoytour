<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $comments = Comment::where('status','1')->latest('id')->paginate(2);

        return view('customer.pages.home',compact('comments'));
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

    public function twodayonenight()
    {
        return view('customer.pages.paket.2d1n');
    }

    public function twodayonenightsnor()
    {
        return view('customer.pages.paket.2d1n-snor');
    }

    public function threedaytwonight()
    {
        return view('customer.pages.paket.3d2n');
    }

}
