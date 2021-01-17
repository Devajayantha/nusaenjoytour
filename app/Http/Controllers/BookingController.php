<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Detpaket;
use App\Models\Paket;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        $detpaket = Detpaket::all();

        return view('customer.pages.booking', compact('paket', 'detpaket'));
    }

    public function ajax(Request $request)
    {
        $pac_id = $request->pac_id;
        // $pac_id = Input::get('pac_id');
        $paxdet = Detpaket::where('paket_id', '=', $pac_id)->get();

        return response()->json($paxdet);
    }

    public function booking(Request $request)
    {
        // dd($request->all());
        $input = new Booking($request->all());
        $input->save();
        return redirect()->back()->with('success','berhasil disimpan datanya');
    }
}
