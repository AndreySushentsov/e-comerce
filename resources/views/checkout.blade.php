@extends('layout.main-layout')

@section('content')
<div class="container">
  <div class="page__title">
    Старница заказа
  </div>
  <div class="breadcrumbs">
    <a href="/">Главная</a>
    <span> / </span>
    <a href="{{route('cart.index')}}">корзина</a>
    <span> / </span>
    <span>страница заказа</span>
  </div>
</div>
<div class="container checkout__container">
  <form class="form checkout__form" action="index.html" method="post">
    <div class="form__address">
      <div class="form__group">
        <label for="city">Город:</label>
        <input type="text" name="city" placeholder="город" id="city" required>
      </div>
      <div class="form__group">
        <label for="street">Улица:</label>
        <input type="text" name="street" placeholder="улица" id="street" required>
      </div>
      <div class="form__group">
        <label for="house-number">Дом:</label>
        <input type="number" name="house-number" class="form__address-house" id="house-number" required>
      </div>
      <div class="form__group">
        <label for="flat-numbet">Квартира:</label>
        <input type="number" name="flat-numbet" class="form__address-flat" id="flat-numbet" required>
      </div>
    </div>
    <div class="form__email">
      <div class="form__group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="email" id="email" required>
      </div>
    </div>
    <div class="form__phone">
      <div class="form__group">
        <label for="phone">Телефон:</label>
        <input type="tel" name="phone" placeholder="phone" id="phone" required>
      </div>
    </div>
    <div class="payment-details">
      <div class="payment-details__title">
        Платежные данные
      </div>
    </div>
  </form>
  <div class="checkout__order">

  </div>
</div>
@endsection
