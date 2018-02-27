@extends('layout.main-layout')

@section('content')
<div class="container">
  <div class="breadcrumbs">
    <a href="/">Главная</a>
    <span> / </span>
    <span>категории</span>
  </div>
  <div class="products__container">
    <div class="products__sidebar">
      <div class="products__menu-title">Категории товаров</div>
      <ul class="products__menu-list">
        @foreach($categories as $category)
          <li class="products__menu-item {{ request()->category == $category->slug ? 'active' : '' }}">
            <a href="{{route('product.product', ['category' => $category->slug])}}">{{$category->name}}</a>
          </li>
        @endforeach


        <!-- <li class="products__menu-item">
          <a href="#">Протеин</a>
        </li>
        <li class="products__menu-item">
          <a href="#">Витаминные комплексы</a>
        </li>
        <li class="products__menu-item">
          <a href="#">Гейнеры</a>
        </li> -->
      </ul>
    </div>
    <div class="products__content">
      <div class="products__title-section">
        <h1 class="products__title">{{$categoryName}}</h1>
        <div class="products__sort-filter">
          <a href="{{route('product.product', ['category' => request()->category, 'sort' => 'low_high'])}}">по возрастанию </a>
          <span> | </span>
          <a href="{{route('product.product', ['category' => request()->category, 'sort' => 'high_low'])}}"> по убыванию</a>
        </div>
      </div>


      @foreach($products as $product)
        <div class="pr-card">
          <div class="pr-card__img-wrapper">
            <a href="{{route('product.show', $product->slug)}}"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
          </div>
          <div class="pr-card__title">
            <a href="{{route('product.show', $product->slug)}}">{{$product->name}}</a>
          </div>
          <div class="pr-card__descr">
            <span>{{$product->ditails}}</span>
          </div>
          <div class="pr-card__price">
            <span>{{$product->price}} p.</span>
          </div>
        </div>
      @endforeach

      @forelse($products as $product)
        <div class="pr-card">
          <div class="pr-card__img-wrapper">
            <a href="{{route('product.show', $product->slug)}}"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
          </div>
          <div class="pr-card__title">
            <a href="{{route('product.show', $product->slug)}}">{{$product->name}}</a>
          </div>
          <div class="pr-card__descr">
            <span>{{$product->ditails}}</span>
          </div>
          <div class="pr-card__price">
            <span>{{$product->price}} p.</span>
          </div>
        </div>
      @empty
        <div>
          <strong>В данной категории нет товаров.</strong>
        </div>
      @endforelse
      <div class="pagination">
        {{ $products->appends(request()->input())->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
