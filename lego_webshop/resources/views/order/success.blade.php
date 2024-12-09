<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop - Rendelés sikeres</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>

@include('layouts.navbar')

<div class="container my-5">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Sikeres rendelés!</h4>
        <p>Kedves {{ $order->customer_name }}, a rendelésed sikeresen leadásra került.</p>
        <hr>
        <p class="mb-0">
            Rendelésed az alábbi azonosítóval lett rögzítve: <strong>#{{ $order->id }}</strong>
        </p>
        <p>
            Összesen fizetett összeg: <strong>{{ $order->total_price }} Ft</strong>
        </p>
        <p>
            Fizetési mód: <strong>{{ ucfirst($order->payment_method) }}</strong>
        </p>
        <p>
            Szállítási cím: <strong>{{ $order->shipping_address }}</strong>
        </p>
        <p>
            A rendelés státusza: <strong>{{ ucfirst($order->status) }}</strong>
        </p>
    </div>

    <a href="{{ route('home') }}" class="btn btn-primary">Tovább a főoldalra</a>
</div>

@include('layouts.footer')

</body>
</html>
