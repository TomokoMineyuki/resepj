@extends('layouts.layout')
@section('title','rese')
<style>
  .mypage__flex{
    background-color: #eee;
    padding:  10px 20px;
    display: flex;
    justify-content: center;
  }
  .reserve__area {
    width: 40%;
    margin: 10px auto;
    padding: 10px;
    background-color: #005bdb;
    color: #FFF;
  }
  .shoplike__area {
    padding: 10px;
    margin: 10px auto;
    width: 40%;
  }
  .liked {
  color: pink;
  }
</style>
@section('menubar')
  @parent
  <h1>Rese</h1>
@endsection
@section('content')
<div>
  <h2>{{$user->name}}さんのマイページ</h2>
  <div class="mypage__flex">
    <div class="reserve__area">
      <h2>予約状況</h2>
      @foreach ( $items as $item )
      <h3>予約{{$item->id}}</h3>
      <a href="{{ route('destroy', ['id' => $item->id]) }}" method="get"><i class="fa-solid fa-circle-xmark"></i></a>
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
          <div class="crad__nav">
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