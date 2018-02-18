@extends('layout.main-layout')

@section('content')
<h1>main section</h1>
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
