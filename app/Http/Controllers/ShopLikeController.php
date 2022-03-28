<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopLike;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShopLikeController extends Controller
{
    public function like(Request $request) {
        $like = ShopLike::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->id,
            ]);
        return redirect('/');
    }

    public function unlike(Request $request) {

    }
}
