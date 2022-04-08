@extends('layouts.login')
@section('title','login')
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

