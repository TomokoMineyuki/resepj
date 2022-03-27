<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (Request $request) {
        $users = Auth::user();

        $items = Reservation::where('user_id', $users->id)->get();
        
        return view('mypage', ['user' => $users, 'item' => $items]);
    }
    
}
