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
        padding: 0px 25px;
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
        display: flex;
        justify-content: space-between;
      }
      .card__btn {
        padding: 5px 10px;
        background: #005bdb;
        border-radius: 5px;
        margin-bottom: 15px;
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
      .reservation__area {
        width: 40%;
        margin: 10px auto;
        padding: 10px;
        color: #FFF;
      }
      .reservation__area h2 {
        color: #000;
      }
      .reservation__card {
        background-color: #005bdb;
        padding: 10px 20px 20px;
        margin: 10px 0;
      }
      .reservation__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .reservation__ttl{
        display: flex;
        align-items: center;
      }
      .reservation__ttl img{
        width: 18px;
        margin-right: 5px;
      }
      .reservation__card td {
        width: 40%;
      }
      .reservation__card a{
        color: inherit;
      }
      .shoplike__area {
        padding: 10px;
        margin: 10px auto;
        width: 50%;
      }
      .shoplike__flex {
        padding:  10px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      .shoplike__card {
        background-color: #FFF;
        border-radius: 5px;
        color:  #000;
        margin:  10px; 
        width: 45%;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }

      .detail__flex{
        background-color: #eee;
        padding:  10px 20px;
        display: flex;
        justify-content: center;
      }
      .shop__area {
        padding: 10px;
        margin: 10px auto;
        width: 40%;
      }
      .reserve__area {
        width: 40%;
        margin: 10px auto;
        background-color: #005bdb;
        color: #FFF;
      }
      .reserve__form {
        width: 100%;
      }
      .output {
        margin: 10px 0;
        background-color: #6c8bf0;
      }
      .reserve__btn {
        border: 0;
        width: 100%;
        text-align: center;
        background-color: #002bba;
        color: #FFF;
        margin: auto 0px 0px;
        padding: 15px 0;
      }
      .detail__img img{
        width: 80%;
      }

      .form__box {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
      }
      .form__header {
          border-radius: 5px 5px 0 0;
          background: #005bdb;
          padding: 15px 20px;
          font-weight: normal;
          color: #fff;
        }
      .form__area {
        z-index: 1;
        background: #FFFFFF;
        max-width: 400px;
        margin: 0 auto 100px;
        padding: 40px;
        text-align: center;
        box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      }
      .user {
        display: inline-block;
        position: relative;
        width: 100%;
      }
      .user::before {
          content: "";
          width: 16px;
          height: 16px;
          background: url(/img/user.png) no-repeat center center / auto 100%;
          display: inline-block;
          position: absolute;
          top: 15px;
          left: 5px;
      }
      .mail {
        display: inline-block;
        position: relative;
        width: 100%;
      }
      .mail::before {
          content: "";
          width: 16px;
          height: 16px;
          background: url(/img/mail.png) no-repeat center center / auto 100%;
          display: inline-block;
          position: absolute;
          top: 15px;
          left: 5px;
      }
      .password {
        display: inline-block;
        position: relative;
        width: 100%;
      }
      .password::before {
          content: "";
          width: 16px;
          height: 16px;
          background: url(/img/lock.png) no-repeat center center / auto 100%;
          display: inline-block;
          position: absolute;
          top: 15px;
          left: 5px;
      }
      .form__area input {
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px 0 15px 2em;
        box-sizing: border-box;
        font-size: 14px;
      }
      .form__area button {
        border-radius: 5px;
        outline: 0;
        background: #005bdb;
        width: 40%;
        border: 0;
        padding: 10px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;
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