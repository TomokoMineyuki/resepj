@extends('layouts.layout')
@section('title','rese')
@section('menubar')
  @parent
  <h1>Rese</h1>
@endsection
@section('content')
  <h2>{{$user->name}}さんのマイページ</h2>
  <div>
    <h2>予約状況</h2>
    <div>

      @foreach ( $item as $item )
      <a href="/reservation/{reservation_id}" method="get">×</a>
      <h3>予約{{$item->id}}</h3>
      <table>
        <tr>
          <td>Shop</td>
          <td>{{$item->shop->name}}</td>
        </tr>
        <tr>
          <td>Date</td>
          <td>{{$item->date}}</td>
        </tr>
        <tr>
          <td>Time</td>
          <td>{{$item->time}}</td>
        </tr>
        <tr>
          <td>Number</td>
          <td>{{$item->number}}人</td>
        </tr>
      </table>
      @endforeach

    </div>
  </div>
  <div>
    <h2>お気に入り店舗</h2>
  </div>
@endsection