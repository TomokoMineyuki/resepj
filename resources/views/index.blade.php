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
    <form class="search__form" action="{{ route('shop.search') }}" method="get">
      @csrf
    <select name="area" class="search__slot" onchange="submit(this.form)">
      <option value = "">All area</option>
      @foreach($areas as $area)
        @if(!empty($area_id) && ($area->id == $area_id))
          <option value="{{$area->id}}" selected>{{$area->name}}</option>
        @else
          <option value="{{$area->id}}">{{$area->name}}</option>
        @endif
      @endforeach
    </select>
    <select name="genre" class="search__slot" onchange="submit(this.form)">
      <option value = "" selected>All genre</option>
      @foreach($genres as $genre)
        @if(!empty($genre_id) && ($genre->id == $genre_id))
          <option value="{{$genre->id}}" selected>{{$genre->name}}</option>
        @else
          <option value="{{$genre->id}}">{{$genre->name}}</option>
        @endif
      @endforeach
    </select>
    <div class="search__icon">
      @if(!empty($search_word))
        <input type="text" name="name" value="{{  $search_word }}" placeholder="Search..." onchange="submit(this.form)">
      @else
      <input type="text" name="name" value="{{ old('name') }}" placeholder="Search..." onchange="submit(this.form)">
      @endif
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