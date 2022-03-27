<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function done() {
        return view('done');
    }

    public function store(Request $request) {
        
        $reservation = Reservation::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
            'date' => $request->date,
            'time' => $request->time,
            'number' => $request->number,
        ]);
        return redirect('done');
    }

    public function destroy(Request $request) {

        Reservation::find($request->id)->delete();
        return redirect('mypage');
    }
}
