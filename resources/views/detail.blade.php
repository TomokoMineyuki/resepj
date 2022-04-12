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
  </div>
@endsection

@section('content')
  <div class="detail__flex">
    <div class="shop__area">
        <h2>{{$shop->name}}</h2>
        <div class="detail__img">
          <img src="{{$shop->photo_url}}" alt="">
        </div>
        <div>
          <p class="tag">#{{$shop->area->name}}#{{$shop->genre->name}}</p>
          <p class="tag">{{$shop->summary}}</p>
        </div>
    </div>
    <div class="reserve__area">
      @if ($errors->any())
      <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif
      <h2>予約</h2>
      <form action="{{ route('reservation') }}" method="post" id="reservationForm" class="reserve__form">
        @csrf
        <input type="hidden" value="{{$shop->id}}" name="shop_id">
        <input type="date" name="date">
        <input type="time" name="time" step="1" min="17:00:00" max="22:00:00" value="17:00:00">
        <select name="number">
          <option value=1>1人</option>
          <option value=2>2人</option>
          <option value=3>3人</option>
          <option value=4>4人</option>
          <option value=5>5人</option>
          <option value=6>6人</option>
          <option value=7>7人</option>
          <option value=8>8人</option>
          <option value=9>9人</option>
          <option value=10>10人</option>
        </select>
        <div id="reservationOutput" class="output">
          <table>
            <tr>
              <td>Shop</td>
              <td>{{$shop->name}}</td>
            </tr>
            <tr>
              <td>Date</td>
              <td><span id="reservationOutputDate"></span></td>
            </tr>
            <tr>
              <td>Time</td>
              <td><span id="reservationOutputTime"></span></td>
            </tr>
            <tr>
              <td>Number</td>
              <td><span id="reservationOutputNumber"></span></td>
            </tr>
          </table>
        </div>
        <button type="submit" class="reserve__btn">予約する</button>
      </form>
    </div>
  </div>

  <script type="text/javascript">
    window.onload = function () {
      getValue();
      var $formObject = document.getElementById( "reservationForm" );
      for( var $i = 0; $i < $formObject.length; $i++ ) {
              $formObject.elements[$i].onkeyup = function(){
                  getValue();
              };
              $formObject.elements[$i].onchange = function(){
                  getValue();
              };
          }
          document.getElementById( "reservationOutputLength" ).innerHTML = $formObject.length;
      }
      function getValue() {
          var $formObject = document.getElementById( "reservationForm" );
          document.getElementById( "reservationOutputDate" ).innerHTML = $formObject.date.value;
          document.getElementById( "reservationOutputTime" ).innerHTML = $formObject.time.value;
          document.getElementById( "reservationOutputNumber" ).innerHTML = $formObject.number.value;
      }
  </script>

@endsection