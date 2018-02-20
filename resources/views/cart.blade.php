@extends('layout.main-layout')

@section('content')
<div class="container">

  @if(Cart::count() > 0)

    <div class="cart__title">
      @if(Cart::count() == 1)
        {{Cart::count()}} Товар в корзине:
      @elseif(Cart::count() <= 4)
        {{Cart::count()}} Товара в корзине:
      @else
        {{Cart::count()}} Товаров в корзине:
      @endif
    </div>

    @foreach(Cart::content() as $item)
    <div class="cart__item">
      <div class="cart__img-wrapper">
        <img src="/img/bcaa_3.jpg" alt="">
      </div>
      <div class="cart__item-title">
        {{$item->name}}
      </div>
      <div class="remote-save">
        <a href="#">Удалить</a>
        <a href="#">Купить позже</a>
      </div>
      <div class="cart__item-input">
        <input type="number" min="0" name="" value="">
      </div>
      <div class="cart__item-price">
        {{$item->price}}
      </div>
    </div>
    @endforeach

  @else
  <p>Корзина пуста.</p>
  @endif

  <div class="price-block">
    <p class="price-block__text">
    Aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen
    </p>
    <div class="price-block__pirces">
      <div class="subtotal">
        <span>Сумма заказа: </span>
        <span> 5000 p.</span>
      </div>
      <div class="discount">
        <span>Скидка: </span>
        <span> 1000 p.</span>
      </div>
      <div class="total-price">
        <span>Итог: </span>
        <span> 4000 p.</span>
      </div>
    </div>
  </div>
  <form action="index.html" class="cart__form" method="post">
    <button type="button" class="btn btn-success" name="button">Оплатить</button>
  </form>
</div>
@endsection
