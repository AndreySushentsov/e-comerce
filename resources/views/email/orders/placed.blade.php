<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equniv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <body>
    Это письмо счастья!!!!!!!!!!!
    Номер заказа: {{$order->id}}
    <ul>
      @foreach($order->products as $product)
      <li>
        Название: {{$product->name}}
        Цена: {{$product->price}}
        Количество: {{$product->pivot->quantity}}
      </li>
      @endforeach
    </ul>

    Сумма заказа: {{$order->billing_total}}
  </body>
</html>
