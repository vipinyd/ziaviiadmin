<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function index(Request $request)
    {
    // return Booking::find(134)->toArray();
         if ($request->ajax()) {
            $booking = Booking::all();
            return datatables()->of($booking)->make(true);
        }

        return view('admin.booking.index');

    }
}
