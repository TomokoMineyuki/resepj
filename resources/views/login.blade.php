@extends('layouts.layout')
@section('title','rese login')

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
<div>
  <div class="login-page">
    <form action="/login" method="POST" class="form">
      @csrf
      <input type="email" name="email" placeholder="&#xf0e0; email"  class="use_icon">
      <input type="password" name="password" placeholder="&#xf023; password"  class="use_icon">
      <input type="submit" value="ログイン">
    </form>
  </div>
</div>
@endsection

