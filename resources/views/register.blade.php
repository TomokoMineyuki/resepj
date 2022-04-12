@extends('layouts.layout')
@section('title','rese register')

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
<div class="form__box">
  <div class="form__header">Registration</div>
    <form action="{{ route('register') }}" method="POST" class="form__area">
      @csrf
      <div class="user">
        <input type="text" name="name" placeholder="name">
      </div>
      <div class="mail">
        <input type="email" name="email" placeholder="email">
      </div>
      <div class="password">
        <input type="password" name="password" placeholder="password">
      </div>
      <div class="button">
        <button type="submit" value="create">登録</button>
      </div>
    </form>

</div>
@endsection