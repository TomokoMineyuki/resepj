<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Genre;
use App\Models\ShopLike;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index() 
    {
        $shops = Shop::with(['shop_likes', 'area', 'genre'])->get();
        $areas = Area::all();
        $genres = Genre::all();
        return view('index', ['shops' => $shops, 'areas' => $areas, 'genres' => $genres]);
    }

    public function detail(Request $request) 
    {
        
        $shop = Shop::where('id', $request->id)->first();
        return view('detail', ['shop' => $shop]);
    }

    public function search(Request $request) 
    {
        unset($request['_token']);
        if ($request->area == null && $request->genre == null) {
            $items = Shop::where('name', 'LIKE', "%{$request->name}%")->get();
        } elseif ($request->area == null && $request->name == null) {
            $items = Shop::where('genre_id', $request->genre)->get();
        } elseif ($request -> genre == null && $request->name == null) {
            $items = Shop::where('area_id', $request->area)->get();
        }
        $areas = Area::all();
        $genres = Genre::all();
        return view('index',['items' => $items, 'area' => $areas, 'genre' => $genres]);
    }
}
