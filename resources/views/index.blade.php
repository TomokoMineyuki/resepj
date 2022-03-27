@extends('layouts.layout')
@section('title','rese')
@section('menubar')
  @parent
  <h1>Rese</h1>
  <div>
    <form action="{{ route('shop.search') }}" method="get">
      @csrf
    <select name="area">
      <option value="">All area</option>
      @foreach($area as $area)
      <option value="{{$area->id}}">{{$area->name}}</option>
      @endforeach
    </select>
    <select name="genre">
      <option value="">All genre</option>
      @foreach($genre as $genre)
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

    @foreach($items as $item)
      <div class="shop__card">
        <div class="card__img">
          <img src="{{$item -> photo_url}}" alt="">
        </div>
        <div class="card__content">
          <h2 class="card__ttl">{{$item->name}}</h2>
          <div>
            <p class="tag">#{{$item->area->name}}</p>
            <p class="tag">#{{$item->genre->name}}</p>
          </div>
          <div class="crad__nav">
            <a class="card__btn" href="/detail/{{$item->id}}">詳しくみる</a>
            <div class="card__like"><i class="fa-solid fa-heart"></i></div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection