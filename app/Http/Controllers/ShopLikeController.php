<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopLike;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShopLikeController extends Controller
{
    public function like(Request $request) 
    {
        ShopLike::create([
            'user_id' => Auth::id(),
            /*'shop_id' => $request->shop_id,*/
            'shop_id' => $request->id,
        ]);

        return back();
    }

    public function unlike(Request $request) 
    {
        ShopLike::find($request->id)->delete();
        /*ShopLike::find($request->shop_like_id)->delete();*/
        return back();
    }
}
