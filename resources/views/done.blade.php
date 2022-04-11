@extends('layouts.layout')
@section('title','rese done')
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
<div class="content__flex">
  <div class="content__box">
    <p>ご予約ありがとうございます</p>
    <a class="content__btn" href="/">戻る</a>
  </div>
</div>
@endsection