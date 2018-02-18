@extends('layout.main-layout')

@section('content')
<div class="container">
  <div class="breadcrumbs">
    <a href="/">Главная</a>
    <span> / </span>
    <a href="/products">категории</a>
    <span> / </span>
    <span>{{$product->name}}</span>
  </div>
  <div class="product__container">
    <div class="product__img-wrapper">
      <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
    </div>
    <div class="product__content">
      <div class="product__title">
        {{$product->name}}
      </div>
      <div class="product__descr">
        {{$product->details}}
      </div>
      <div class="product__price">
        {{$product->price}} p.
      </div>
      <p class="product__full-descr">
        {{$product->description}}
      </p>
      <form class="product__form" action="index.html" method="post">
        <button type="button" name="button" class="btn">Добавить</button>
      </form>
    </div>
  </div>
</div>
<div class="same-view">
  <div class="container">
    <div class="same-view__title">
      Вмесет с этим товаром просматривают:
    </div>
    <div class="card-mini__container">
      @foreach ($sameView as $product)
          <div class="card-mini">
            <div class="card-mini__img-wrapper">
              <a href="{{route('product.show', $product->slug)}}"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
            </div>
            <div class="card-mini__content">
              <div class="card-mini__title">
                <a href="{{route('product.show', $product->slug)}}">{{$product->name}}</a>
              </div>
              <div class="card-mini__price">
                {{$product->price}} p.
              </div>
            </div>
          </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
