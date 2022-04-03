@extends('layouts.layout')
@section('title','rese')
<style>
  .liked {
  color: pink;
  }
  .unliked {
    color: silver;
  }
</style>
@section('menubar')
  @parent
  <h1>Rese</h1>
  <div>
    <form action="{{ route('shop.search') }}" method="get">
      @csrf
    <select name="area">
      <option value="">All area</option>
      @foreach($areas as $area)
      <option value="{{$area->id}}">{{$area->name}}</option>
      @endforeach
    </select>
    <select name="genre">
      <option value="">All genre</option>
      @foreach($genres as $genre)
      <option value="{{$genre->id}}">{{$genre->name}}</option>
      @endforeach
    </select>
    <input type="text" name="name" placeholder="Search...">
    </form>
  </div>
  <div>
    <a href="/logout" method="get">ログアウト</a>
  </div>
@endsection

@section('content')
  <div class="flex__item">

    @foreach($shops as $shop)
      <div class="shop__card">
        <div class="card__img">
          <img src="{{$shop->photo_url}}" alt="">
        </div>
        <div class="card__content">
          <h2 class="card__ttl">{{$shop->name}}</h2>
          <div>
            <p class="tag">#{{$shop->area->name}}</p>
            <p class="tag">#{{$shop->genre->name}}</p>
          </div>
          <div class="crad__nav">
            <a class="card__btn" href="{{ route('shop.detail', ['id' => $shop->id]) }}">詳しくみる</a>
            <div class="card__like">
              @foreach($shop->shop_likes as $shop->shop_like)
              @if ( empty($shop->shop_like->user_id === Auth::id()) )
              <span>
                <a href="{{ route('shop.like', ['id' => $shop->id]) }}" method="get">
                <i class="fa-solid fa-heart unliked"></i></a>
              </span>
              @else
              <span>
                <a href="{{ route('shop.unlike', ['id' => $shop->shop_like->id]) }}" method="get">
                <i class="fa-solid fa-heart liked"></i></a>
              </span>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection