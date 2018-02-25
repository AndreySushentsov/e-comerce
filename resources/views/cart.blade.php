@extends('layout.main-layout')

@section('content')
<div class="container cart__container">
  <div class="breadcrumbs">
    <a href="/">Главная</a>
    <span> / </span>
    <span>корзина</span>
  </div>
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
        <a href="{{route('product.show', $item->model->slug)}}"><img src="/img/bcaa_3.jpg" alt="{{$item->model->name}}"></a>
      </div>
      <div class="cart__item-title">
        <a href="{{route('product.show', $item->model->slug)}}">{{$item->model->name}}</a>
      </div>
      <div class="remote-save">
        <form class="form" action="{{route('cart.destroy', $item->rowId)}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" name="button">Удалить</button>
        </form>
        <form class="form" action="{{route('cart.saveforlater', $item->rowId)}}" method="post">
          {{csrf_field()}}
          <button type="submit" name="button">Сохранить</button>
        </form>
      </div>
      <div class="cart__item-input">
        <select  name="" class="cart__item-select" data-id="{{$item->rowId}}">
          @for($i = 1; $i < 5 + 1; $i++)
            <option {{ $item->qty == $i ? "selected" : ""}}>{{$i}}</option>
          @endfor
        </select>
      </div>
      <div class="cart__item-price">
        {{$item->model->price}}
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
        <span>{{Cart::subtotal()}} p.</span>
      </div>
      <!-- <div class="discount">
        <span>Скидка: </span>
        <span> p.</span>
      </div> -->
      <div class="total-price">
        <span>Итог: </span>
        <span> {{Cart::total()}} p.</span>
      </div>
    </div>
  </div>
  <a href="{{route('checkout.index')}}" class="btn btn-success">Оплатить</a>

  <div class="card-mini__container save-for-later__container">
    @if(Cart::instance('saveForLater')->count() > 0)
      <span>Сохраненные товары:</span>
      @foreach(Cart::instance('saveForLater')->content() as $item)
        <div class="card-mini">
          <div class="card-mini__img-wrapper">
            <a href="#"><img src="/img/bcaa_1.jpg" alt="bcaa"></a>
          </div>
          <div class="remote-save">
            <form class="form" action="{{route('saveForLater.destroy', $item->rowId)}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit" name="button">Удалить</button>
            </form>
            <form class="form" action="{{route('saveForLater.saveforlater', $item->rowId)}}" method="post">
              {{csrf_field()}}
              <button type="submit" name="button">в корзину</button>
            </form>
          </div>
          <div class="card-mini__content">
            <div class="card-mini__title">
              <a href="#">{{$item->model->name}}</a>
            </div>
            <div class="card-mini__price">
              {{$item->model->price}}
            </div>
          </div>
        </div>
      @endforeach
    @else
      <span>Нет сохраненных товаров</span>
    @endif
  </div>
</div>
@endsection
@section('extra-js')
<script type="text/javascript">
  (function(){
    const className = document.querySelectorAll('.cart__item-select');

    Array.from(className).forEach(function(elem) {
      elem.addEventListener('change', function() {
        const id = elem.getAttribute('data-id');

        axios.patch(`/cart/${id}`, {
          quantity: this.value
        })
        .then(function (response) {
          console.log(response);
          window.location.href = '{{route('cart.index')}}'
        })
        .catch(function (error) {
          console.log(error);
        });
      });
    });
  })();
</script>
@endsection
