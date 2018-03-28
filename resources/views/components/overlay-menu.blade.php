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
<script type="text/javascript">
  const burger = document.querySelector('#nav-burger');
  const overlayMenu = document.querySelector('#overlay-menu');
  burger.addEventListener('click', function() {
    if(overlayMenu.style.left == "-70%"){
      burger.classList.add('change');
      overlayMenu.style.left = "0";
    }else{
      burger.classList.remove('change');
      overlayMenu.style.left = "-70%";
    }
  });
</script>
@endsection
