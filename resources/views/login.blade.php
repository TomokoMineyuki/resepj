@extends('layouts.layout')
@section('title','login')
@section('content')
<div>
  <div>
    <form action="/login" method="POST">
      @csrf
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="submit" value="ログイン">
    </form>
  </div>
</div>
@endsection