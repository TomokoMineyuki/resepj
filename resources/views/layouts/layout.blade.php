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

      .menu-checkbox {
        display: none;
      }
      .drawer-menu {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 200;
        height: 100%;
        width: 100%;
        transform: translateX(-100%);
        transition: .5s;
        background-color: #fff;
      }
      .drawer-menu ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
      }
      .drawer-menu a {
        display: block;
        text-align: center;
        padding: 15px;
        color: #005bdb;
        font-weight: 600;
        text-decoration: none;
      }
      .drawer-menu img {
        margin: 50px auto auto 20px;
        cursor: pointer;
      }
      .menu-checkbox:checked ~ .drawer-menu {
        transform: translateX(0);
      }
      .menu-background {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, .5);
        cursor: pointer;
      }
      .menu-checkbox:checked ~ .menu-background {
        display: block;
      }

      .menu__flex {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .menu__logo {
        padding: 10px;
        display: flex;
        align-items: center;
      }
      .menu__img {
        display: inline-block;
      }
      .menu__search {
        align-items: center;
        background: #FFF;
        border-radius: 5px;
        color:  #000;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }
      #form {
        position:relative;
        max-width:600px;
      }
      .search__icon {
        display: inline-block;
        position: relative;
      }
      .search__icon::before {
        content: "";
        width: 16px;
        height: 16px;
        background: url(/img/glass.png) no-repeat center center / auto 100%;
        display: inline-block;
        position: absolute;
        top: 4px;
        left: 5px;
      }
      .search__icon input {
        padding: 3px 0 3px 2em;
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
      .liked {
      color: pink;
      }
      .unliked {
      color: silver;
      }

      .mypage__flex{
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
      .shoplike__area {
        padding: 10px;
        margin: 10px auto;
        width: 40%;
      }

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

      .login-page {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
      }
      .form {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }
      .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
      }
      .use_icon{
        display: inline-block;
        font-family: "Font Awesome 4.7 Free";
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .form input i {
	      position: absolute;
	      top: 8px;
	      left: 0;
	      padding: 9px 8px;
	      transition: 0.3s;
	      color: #aaaaaa;
      }
      .form button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
      }
      .form button:hover,.form button:active,.form button:focus {
        background: #43A047;
      }
      .form .message {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
      }
      .form .message a {
        color: #4CAF50;
        text-decoration: none;
      }
      .form .register-form {
        display: none;
      }
      .container {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
      }
      .container:before, .container:after {
        content: "";
        display: block;
        clear: both;
      }
      .container .info {
        margin: 50px auto;
        text-align: center;
      }
      .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
      }
      .container .info span {
        color: #4d4d4d;
        font-size: 12px;
      }
      .container .info span a {
        color: #000000;
        text-decoration: none;
      }
      .container .info span .fa {
        color: #EF3B3A;
      }

      .content__flex {
        display: flex;
        align-items: center;
      }
      .content__box {
        width: 300px;
        background-color: #FFF;
        border-radius: 5px;
        color:  #000;
        margin: 10px auto;
        padding: 50px 0;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
        text-align: center;
      }
      .content__btn {
        padding: 5px 10px;
        background: #005bdb;
        border-radius: 5px;
        margin: 10px auto;
        display: inline-block;
        color: #fff;
        font-size: 14px;
      }
    </style>
    <script src="https://kit.fontawesome.com/d995382c8b.js" crossorigin="anonymous"></script>
  </head>
  <body>
    @section('menubar')
    @show
    <div>
    @yield('content')
    </div>
    
  </body>
</html>