@extends('layouts.layout')
@section('title','rese')

@section('menubar')
  @parent
  <div class="menu__flex">
    <div class="menu__logo">
      <input type="checkbox" id="menu-toggle" class="menu-checkbox">
      <label for="menu-toggle">
        <img src="/img/logo.png" class="menu__img">
      </label>
      <div class="drawer-menu">
        <label for="menu-toggle">
          <img src="/img/close.png">
        </label>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/logout" method="get">Logout</a></li>
          <li><a href="/mypage">Mypage</a></li>
        </ul>
      </div>
      <label for="menu-toggle" class="menu-background"></label>
      <h1>Rese</h1>
    </div>
</div>
@endsection
@section('content')
<div>
  <h2>{{$user->name}}さんのマイページ</h2>
  <div class="mypage__flex">
    <div class="reserve__area">
      <h2>予約状況</h2>
      @foreach ( $items as $item )
      <h3>予約{{$item->id}}</h3>
      <a href="/reservation/{{$item->id}}" method="get"><i class="fa-solid fa-circle-xmark"></i></a>
      <table>
        <tr>
          <td>Shop</td>
          <td>{{$item->shop->name}}</td>
        </tr>
        <tr>
          <td>Date</td>
          <td>{{$item->date}}</td>
        </tr>
        <tr>
          <td>Time</td>
          <td>{{$item->time}}</td>
        </tr>
        <tr>
          <td>Number</td>
          <td>{{$item->number}}人</td>
        </tr>
      </table>
      @endforeach
    </div>
    <div class="shoplike__area">
      <h2>お気に入り店舗</h2>
      @foreach ( $likes as $like )
      <div>
        <div class="card__img">
          <img src="{{$like->shop->photo_url}}" alt="">
        </div>
        <div class="card__content">
          <h2 class="card__ttl">{{$like->shop->name}}</h2>
          <div>
            <p class="tag">#{{$like->shop->area->name}}</p>
            <p class="tag">#{{$like->shop->genre->name}}</p>
          </div>
          <div class="card__nav">
            <a class="card__btn" href="/detail/{{$like->shop->id}}">詳しくみる</a>
            <div class="card__like">
              <span>
                <a href="{{ route('shop.unlike', ['id' => $like->id]) }}" method="get">
                <i class="fa-solid fa-heart liked"></i></a>
              </span>
            </div>
          </div>
        </div>
      </div>      
      @endforeach
    </div>
  </div>
</div>

@endsection