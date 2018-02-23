@extends('layout.main-layout')

@section('content')
<div class="jumbotron">
  <h1>Спортивное питание по самым низким ценам.</h1>
</div>
<section class="news-sales">
  <div class="container news-sales__container">
    <a href="#">
      <!-- <img src="{{asset('img/slide_6.jpeg')}}" alt=""> -->
      <!-- <span>Наши акции</span> -->
      Наши новости
    </a>
    <a href="#">Наши акции</a>
  </div>
</section>
<section class="advantages">
  <div class="section__title">
    Наши приемущества.
  </div>
  <div class="container advantages__container">
    <div class="advantages__item">
      <i class="fas fa-truck"></i>
      <div class="advantages__item-title">
        Доставка по городу бесплатно.
      </div>
    </div>
    <div class="advantages__item">
      <i class="far fa-credit-card"></i>
      <div class="advantages__item-title">
        Оплата наличными либо по банковской карте.
      </div>
    </div>
    <div class="advantages__item">
      <i class="far fa-thumbs-up"></i>
      <div class="advantages__item-title">
        Доступность. Мы находимся в крупном торговом центре.
      </div>
    </div>
  </div>
</section>
<section class="latest">
  @foreach ($products as $product)
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
</section>
@endsection
