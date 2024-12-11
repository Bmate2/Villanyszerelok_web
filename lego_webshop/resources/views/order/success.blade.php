<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop - Rendelés sikeres</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/order.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>

@include('layouts.navbar')

<div class="container my-5">
    <div class="info" role="alert">
        <h1 class="alert-heading">Sikeres rendelés!</h1>
        <p>Kedves {{ $order->customer_name }}, a rendelésed rögzítettük.</p>
        <hr>
        <p>
            Összesen fizetett összeg: <strong>{{ $order->total_price }} Ft</strong>
        </p>
        <p>
        Fizetési mód: 
            <strong>
                @if($order->payment_method == 'cash_on_delivery')
                    Utánvétel
                @elseif($order->payment_method == 'paypal')
                    PayPal fizetés
                @elseif($order->payment_method == 'credit_card')
                    Bankkártyás fizetés
                @else
                    {{ ucfirst($order->payment_method) }}
                @endif
            </strong>
        </p>
        <p>
            Email-cím: <strong>{{ ucfirst($order->customer_email) }}</strong>
        </p>
        <p>
            Szállítási cím: <strong>{{ $order->shipping_address }}</strong>
        </p>
        <a href="{{ route('home') }}" class="home-btn">Vissza a főoldalra</a>
    </div>
</div>

@include('layouts.footer')

</body>
</html>
