@extends('layouts.layout')
@section('title','rese')

@section('menubar')
  @parent
  <div class="menu__flex">
    <div class="menu__logo">
      @if(!empty(Auth::id()))
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
      @else
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
      @endif
      <h1>Rese</h1>
    </div>
  </div>
@endsection

@section('content')
  <div class="detail__flex">
    <div class="shop__area">
      <div class="shop__area-ttl">
        <a href="/"><img src="/img/back.png"></a>
        <h2>{{$shop->name}}</h2>
      </div>
        <div class="detail__img">
          <img src="{{$shop->photo_url}}" alt="">
        </div>
        <div class="detail__addition">
          <p class="tag">#{{$shop->area->name}}#{{$shop->genre->name}}</p>
          <p class="tag">{{$shop->summary}}</p>
      </div>
    </div>
    <div class="reserve__area">
      <h2 class="reserve__ttl">予約</h2>
      <form id="reservationForm" class="reserve__form" action="{{ route('reservation') }}" method="post">
        @csrf
        <ul>
          <li>
            <input type="hidden" value="{{$shop->id}}" name="shop_id">
          </li>
          <li>
            <input type="date" name="date" id="date">
          </li>
          <li>
            <input type="time" name="time" step="1" min="17:00:00" max="22:00:00" value="17:00:00">
          </li>
          <li>
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
          </li>
          <li>
            <table class="output">
              <tr>
                <td class="output__ttl">Shop</td>
                <td>{{$shop->name}}</td>
              </tr>
              <tr>
                <td class="output__ttl">Date</td>
                <td><span id="reservationOutputDate"></span></td>
              </tr>
              <tr>
                <td class="output__ttl">Time</td>
                <td><span id="reservationOutputTime"></span></td>
              </tr>
              <tr>
                <td class="output__ttl">Number</td>
                <td><span id="reservationOutputNumber"></span></td>
              </tr>
            </table>
          </li>
        </ul>
        <button type="submit">予約する</button>
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
          var date = new Date();
          date.setDate(date.getDate());
          var yyyy = date.getFullYear();
          var mm = ("0"+(date.getMonth()+1)).slice(-2);
          var dd = ("0"+date.getDate()).slice(-2);
          document.getElementById("date").value=yyyy+'-'+mm+'-'+dd;

          var $formObject = document.getElementById( "reservationForm" );
          document.getElementById( "reservationOutputDate" ).innerHTML = $formObject.date.value;
          document.getElementById( "reservationOutputTime" ).innerHTML = $formObject.time.value;
          document.getElementById( "reservationOutputNumber" ).innerHTML = $formObject.number.value;
      }
  </script>
@endsection