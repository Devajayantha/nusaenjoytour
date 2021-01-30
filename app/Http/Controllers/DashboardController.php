<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Comment;
use COM;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['detPaket.paket'])->get();

        return view('admin.pages.index', compact('bookings'));
    }

    public function comment()
    {
        $comments = Comment::latest('id')->get();

        return view('admin.pages.comment', compact('comments'));
    }

    public function verify(Comment $comment)
    {
        $comment->update(['status' => '1']);

        return redirect()->route('dashboard.comment');
    }

    public function unverify(Comment $comment)
    {
        $comment->update(['status' => '0']);

        return redirect()->route('dashboard.comment');
    }

    public function create(Request $request)
    {
        $comment = new Comment($request->all());
        $comment->save();

        return redirect()->route('home');
    }

}
