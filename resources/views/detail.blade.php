@extends('layouts.layout')
@section('title','rese')
<style>
  .detail__flex{
        background-color: #eee;
        padding:  10px 20px;
        display: flex;
        justify-content: center;
      }
  .reserve__area {
    width: 40%;
    margin: 10px auto;
    padding: 10px;
    background-color: #005bdb;
    color: #FFF;
  }
  .shop__area {
    padding: 10px;
    margin: 10px auto;
    width: 40%;
  }
.detail__img img{
    width: 80%;
      }
</style>

@section('content')
  <div class="detail__flex">
    <div class="shop__area">
      <h1>Rese</h1>
      <div>
        <h2>{{$shop->name}}</h2>
        <div class="detail__img"><img src="{{$shop->photo_url}}" alt=""></div>
        <div>
          <p class="tag">#{{$shop->area->name}}#{{$shop->genre->name}}</p>
          <p class="tag">{{$shop->summary}}</p>
        </div>
        
      </div>
    </div>
    <div class="reserve__area">
      <h2>予約</h2>
      <form action="{{ route('reservation') }}" method="post">
        @csrf
        <input type="hidden" value="{{$shop->id}}" name="shop_id">
        <input type="date" name="date">
        <input type="time" name="time" list="time">
        <datalist id="time">
        <option value="17:00"></option>
        <option value="18:00"></option>
        <option value="19:00"></option>
        <option value="20:00"></option>
        <option value="21:00"></option>
        <option value="22:00"></option>
        </datalist>
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

      <div>
        <table>
          <tr>
            <td>Shop</td>
            <td>{{$shop->name}}</td>
          </tr>
          <tr>
            <td>Date</td>
            <td></td>
          </tr>
          <tr>
            <td>Time</td>
            <td></td>
          </tr>
          <tr>
            <td>Number</td>
            <td></td>
          </tr>
        </table>
        <input type="submit" value="予約する">
        </form>
      </div>

      
    </div>
  </div>
@endsection