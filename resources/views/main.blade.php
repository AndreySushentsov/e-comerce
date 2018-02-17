@extends('layout.main-layout')

@section('content')
<h1>main section</h1>
<section class="latest">
  <div class="pr-card">
    <div class="pr-card__img-wrapper">
      <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
    </div>
    <div class="pr-card__title">
      <a href="#">product title</a>
    </div>
    <div class="pr-card__descr">
      <span>описание товара</span>
    </div>
    <div class="pr-card__price">
      <span>1999 p.</span>
    </div>
  </div>
</section>
@endsection
