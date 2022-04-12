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
          <li><a href="/register" method="get">Registration</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </div>
      <label for="menu-toggle" class="menu-background"></label>
      <h1>Rese</h1>
    </div>
  <div class="menu__search">
    <form action="{{ route('shop.search') }}" method="get" id="form">
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
    <div class="search__icon">
    <input type="text" name="name" placeholder="Search...">
    </div>
    </form>
  </div>
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
          <p class="tag">#{{$shop->area->name}}</p>
          <p class="tag">#{{$shop->genre->name}}</p>
          <div class="card__nav">
            <a class="card__btn" href="/detail/{{$shop->id}}">詳しくみる</a>
            <div class="card__like">
              @if (in_array(Auth::id(), array_column($shop->shop_likes->toArray(), 'user_id')))
              <span>
                <a href="{{ route('shop.unlike', ['id' => $shop->id]) }}" method="get">
                <i class="fa-solid fa-heart liked"></i></a>
              </span>
              @else
              <span>
                <a href="{{ route('shop.like', ['id' => $shop->id]) }}" method="get">
                <i class="fa-solid fa-heart unliked"></i></a>
              </span>
              @endif
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection