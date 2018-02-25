@extends('layout.main-layout')
@section('extra-css')
  <script src="https://js.stripe.com/v3/"></script>
@endsection
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
  <form class="form checkout__form" action="{{route('checkout.store')}}" method="POST" id="payment-form">
    {{csrf_field()}}
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
        <label for="flat-number">Квартира:</label>
        <input type="number" name="flat-number" class="form__address-flat" id="flat-number" required>
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
      <div class="form__group">
        <label for="cardholder-name">Имя латинскими буквами (как на карте):</label>
        <input type="tel" name="cardholder-name" placeholder="Имя держателя карты" id="cardholder-name" required>
      </div>
      <div class="form__group">
        <div class="form-row">
          <label for="card-element">
            Номер карты и CVC-код
          </label>
          <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
          </div>
          <!-- Used to display form errors. -->
          <div id="card-errors" role="alert"></div>
        </div>
      </div>
      <!-- <div class="form__group">
        <label for="card-number">Номер карты:</label>
        <input type="number" name="card-number" placeholder="Номер карты" id="card-number" required>
      </div>
      <div class="card-date-cvs">
        <div class="form__group">
          <label for="card-date">Дата действия карты:</label>
          <input type="text" name="card-date" placeholder="YY/mm" id="card-date" required>
        </div>
        <div class="form__group">
          <label for="card-cvc">CVC карты:</label>
          <input type="number" name="card-cvc" placeholder="cvc" id="card-cvc" required>
        </div>
      </div> -->
    </div>
    <button id="complete-order" type="submit" name="button" class="btn btn-success form__submit">Оплатить</button>
  </form>
  <div class="checkout__order">
    @foreach(Cart::content() as $item)
      <div class="cart__item checkout__item">
        <div class="cart__img-wrapper">
          <a href="#"><img src="/img/bcaa_3.jpg" alt="img"></a>
        </div>
        <div class="cart__item-title">
          <a href="#">{{$item->model->name}}</a>
        </div>
        <div class="cart__item-input">
          <input type="number" min="0" name="" value="">
        </div>
        <div class="cart__item-price">
          {{$item->model->price}}
        </div>
      </div>
    @endforeach
    <div class="checkout__order-prices">
      <div class="checkout__order-prices-row">
        <span>Итого к оплате:</span>
        <span>{{Cart::total()}}</span>
      </div>
    </div>
  </div>
</div>
@endsection

@section('extra-js')
<script type="text/javascript">
  (function() {
    // Create a Stripe client.
    var stripe = Stripe('pk_test_6pRNASCoBOKtIshFeQd4XMUh');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '14px',
        '::placeholder': {
          color: '#757779',
          fontStyle: 'italic'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {
      style: style,
      hidePostalCode: true
    });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      document.getElementById('complete-order').disabled = true;

      var options = {
        name: document.getElementById('cardholder-name').value,
        address_city: document.getElementById('city').value
      }


      stripe.createToken(card, options).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;

          document.getElementById('complete-order').disabled = false;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });

    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }


  })();
</script>
@endsection
