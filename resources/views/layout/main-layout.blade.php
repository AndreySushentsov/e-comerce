<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>e-comerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
        <!-- Styles -->
        @yield('extra-css')
    </head>
    <body>
      <!-- overlay menu -->
      @include('components.overlay-menu')
      <!-- end overlay menu -->
      
      <div id="app">
        <header>
          <a href="/" class="logo">SportPit</a>
          <nav class="header__navigation">
            <ul>
              <li>
                <a href="/products">Категории</a>
              </li>
              <li>
                <a href="#">Производители</a>
              </li>
              <li>
                <a href="#">Блог</a>
              </li>
            </ul>
          </nav>
          <div class="search__container">
            <form class="" action="{{route('search')}}" value="{{request()->input('query')}}" method="get">
              <i class="fa fa-search"></i>
              <input type="text" name="query" id="query" value="" placeholder="Поиск">
            </form>
          </div>
          <div class="header__tel">
            <span>тел: </span>
            <a href="tel:89630424243" title="Контактный телефон"> 89630424243</a>
          </div>


          <div class="header__icons">
            @guest
            <a href="/login"><i class="far fa-user"></i></a>
            @else
            <div class="user_name">
              {{ Auth::user()->name }}
            </div>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                выход
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endguest
            <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
          </div>

          <!-- burger menu -->
          <a herf="#" class="nav_burger" id="nav-burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </a>
          <!-- end burger menu -->

        </header>
        <main>
          @yield('content')
        </main>
        <footer>

        </footer>
      </div>

      <script src="{{asset('js/app.js')}}"></script>
      @yield('extra-js')
    </body>
</html>
