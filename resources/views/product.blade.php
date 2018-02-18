@extends('layout.main-layout')

@section('content')
<div class="container">
  <div class="breadcrumbs">
    <a href="/">Главная</a>
    <span> / </span>
    <a href="/proucts">категории</a>
    <span> / </span>
    <span>продукт</span>
  </div>
  <div class="product__container">
    <div class="product__img-wrapper">
      <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
    </div>
    <div class="product__content">
      <div class="product__title">
        BCAA
      </div>
      <div class="product__descr">
        Краткое описание
      </div>
      <div class="product__price">

      </div>
      <p class="product__full-descr">
        Полное описание продукта.
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
      <div class="card-mini">
        <div class="card-mini__img-wrapper">
          <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
        </div>
        <div class="card-mini__content">
          <div class="card-mini__title">
            <a href="#">BCAAB</a>
          </div>
          <div class="card-mini__price">
            1999
          </div>
        </div>
      </div>
      <div class="card-mini">
        <div class="card-mini__img-wrapper">
          <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
        </div>
        <div class="card-mini__content">
          <div class="card-mini__title">
            <a href="#">BCAAB</a>
          </div>
          <div class="card-mini__price">
            1999
          </div>
        </div>
      </div>
      <div class="card-mini">
        <div class="card-mini__img-wrapper">
          <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
        </div>
        <div class="card-mini__content">
          <div class="card-mini__title">
            <a href="#">BCAAB</a>
          </div>
          <div class="card-mini__price">
            1999
          </div>
        </div>
      </div>
      <div class="card-mini">
        <div class="card-mini__img-wrapper">
          <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
        </div>
        <div class="card-mini__content">
          <div class="card-mini__title">
            <a href="#">BCAAB</a>
          </div>
          <div class="card-mini__price">
            1999
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
