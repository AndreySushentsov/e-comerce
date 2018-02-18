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
      <div class="products__menu-title">Категории</div>
      <ul class="products__menu-list">
        <li class="products__menu-item">
          <a href="#">BCAA</a>
        </li>
        <li class="products__menu-item">
          <a href="#">Протеин</a>
        </li>
        <li class="products__menu-item">
          <a href="#">Витаминные комплексы</a>
        </li>
        <li class="products__menu-item">
          <a href="#">Гейнеры</a>
        </li>
      </ul>
    </div>
    <div class="products__content">
      <h1 class="products__title">BCAA</h1>
      @foreach($products as $product)
        <div class="pr-card">
          <div class="pr-card__img-wrapper">
            <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
          </div>
          <div class="pr-card__title">
            <a href="#">{{$product->name}}</a>
          </div>
          <div class="pr-card__descr">
            <span>{{$product->ditails}}</span>
          </div>
          <div class="pr-card__price">
            <span>{{$product->price}} p.</span>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
