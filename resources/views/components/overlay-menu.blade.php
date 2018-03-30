<div class="overlay-menu__container" id="overlay-menu">
  <div class="overlay-menu__search">
    <form class="" action="{{route('search')}}" value="{{request()->input('query')}}" method="get">
      <i class="fa fa-search"></i>
      <input type="text" name="query" id="query" value="" placeholder="Поиск">
    </form>
  </div>
  <nav class="overlay-menu__navigation">
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
</div>
@section('extra-js')

@endsection
