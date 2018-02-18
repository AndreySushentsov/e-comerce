@extends('layout.main-layout')

@section('content')
<div class="container">
  <div class="cart__title">
    Товаров в корзине:
  </div>
  <div class="cart__item">
    <div class="cart__img-wrapper">
      <img src="/img/bcaa_3.jpg" alt="">
    </div>
    <div class="cart__item-title">
      Название товара.
    </div>
    <div class="remote-save">
      <a href="#">Удалить</a>
      <a href="#">Купить позже</a>
    </div>
    <div class="cart__item-input">
      <input type="number" min="0" name="" value="">
    </div>
    <div class="cart__item-price">
      2999 p.
    </div>
  </div>
  <div class="cart__item">
    <div class="cart__img-wrapper">
      <img src="/img/bcaa_3.jpg" alt="">
    </div>
    <div class="cart__item-title">
      Название товара.
    </div>
    <div class="remote-save">
      <a href="#">Удалить</a>
      <a href="#">Купить позже</a>
    </div>
    <div class="cart__item-input">
      <input type="number" min="0" name="" value="">
    </div>
    <div class="cart__item-price">
      2999 p.
    </div>
  </div>
  <div class="cart__item">
    <div class="cart__img-wrapper">
      <img src="/img/bcaa_3.jpg" alt="">
    </div>
    <div class="cart__item-title">
      Название товара.
    </div>
    <div class="remote-save">
      <a href="#">Удалить</a>
      <a href="#">Купить позже</a>
    </div>
    <div class="cart__item-input">
      <input type="number" min="0" name="" value="">
    </div>
    <div class="cart__item-price">
      2999 p.
    </div>
  </div>
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
