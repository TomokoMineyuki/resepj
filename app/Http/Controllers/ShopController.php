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
        
        $shop = Shop::where('id', $request->shop_id)->first();
        return view('detail', ['shop' => $shop]);
    }

    public function search(Request $request) 
    {
        unset($request['_token']);
        if ($request->area == null && $request->genre == null) {
            $shops = Shop::where('name', 'LIKE', "%{$request->name}%")->get();
        } elseif ($request->area == null && $request->name == null) {
            $shops = Shop::where('genre_id', $request->genre)->get();
        } elseif ($request -> genre == null && $request->name == null) {
            $shops = Shop::where('area_id', $request->area)->get();
        } elseif ($request -> area == null) {
            $shops = Shop::where('genre_id', $request->genre)->where('name', 'LIKE', "%{$request->name}%")->get();
        } elseif ($request -> genre == null) {
            $shops = Shop::where('area_id', $request->area)->where('name', 'LIKE', "%{$request->name}%")->get();
        } else {
            $shops = Shop::where('area_id', $request->area)->where('genre_id', $request->genre)->where('name', 'LIKE', "%{$request->name}%")->get();
        }
        $areas = Area::all();
        $genres = Genre::all();
        return view('index',['shops' => $shops, 'areas' => $areas, 'genres' => $genres, 'area_id' => $request->area, 'genre_id' => $request->genre, 'search_word' => $request->name]);
    }
}
