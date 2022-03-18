<html>
  <head>
    <title>@yield('title')</title>
    <style>
      body {
        background: #eee;
      }
      h1 {
        color: #005bdb;
      }

      a {
        text-decoration:none;
      }

      .search {
        background: #FFF;
        border-radius: 5px;
        color:  #000;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }


      .flex__item{
        background-color: #eee;
        padding:  10px 20px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .shop__card {
        background-color: #FFF;
        border-radius: 5px;
        color:  #000;
        margin:  10px; 
        width: 20%;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }

      .card__img img {
        border-radius: 5px 5px 0 0;
        width: 100%;
      }

      .card__content {
        padding: 15px 25px;
      }

      .card__ttl {
        font-size: 18px;
        font-weight: 400;
      }
      
      .tag {
        font-size: 14px;
        display: inline-block;
        margin-right: 20px;
        color: #888888;
      }

      .card__nav {
        display: inline-flex;
        justify-content: space-between;
      }

      .card__btn {
        padding: 5px 10px;
        background: #005bdb;
        border-radius: 5px;
        margin-bottom: 10px;
        display: inline-block;
        color: #fff;
        font-size: 14px;
      }

      .card__like {
        display: inline-block;
        color: #888888;
        font-size: 24px;
      }
    </style>
  </head>
  <body>
    @section('menubar')
    @show
    <div>
    @yield('content')
    </div>
    
  </body>
</html>