@extends('layouts.layout')
@section('title','register')
@section('content')
<div>
  <div>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="name">
      <input type="email" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="submit" value="create">
    </form>
  </div>
</div>
@endsection