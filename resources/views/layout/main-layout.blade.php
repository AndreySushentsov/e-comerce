<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>e-comerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
      <div id="app">
        <header>
          <a href="#" class="logo">Starostin</a>
          <nav class="header__navigation">
            <ul>
              <li>
                <a href="#">спортивное питание</a>
              </li>
              <li>
                <a href="#">бренды</a>
              </li>
              <li>
                <a href="#">аксессуары</a>
              </li>
            </ul>
          </nav>
          <a href="tel:89630424243" class="header__tel">89630424243</a>
          <div class="header__icons">
            <a href="#"><i class="far fa-user"></i></a>
            <a href="/cart"><i class="fas fa-shopping-cart"></i></a>
          </div>
        </header>
        <main>
          @yield('content')
        </main>
        <footer>

        </footer>
      </div>

      <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
