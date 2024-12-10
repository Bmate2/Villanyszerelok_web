<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    

    <link rel="stylesheet" href="{{ asset('/css/adminorders.css') }}">
</head>
<body>
    @include('layouts.navbar')
    <div class="det-order-container">
        <h1>Rendelés részletei</h1>
        <hr>
        <div class="inner-container">
            <div class="info-container">
                <p><strong>ID:</strong> {{ $order->id }}</p>
                <p><strong>Név:</strong> {{$order->user ? $order->user->name : 'Vendég'}} </p>
                <p><strong>Email:</strong> {{$order->customer_email}} </p>
                <p><strong>Telefon:</strong> {{$order->cusmtomer_phone ? $order->cusmtomer_phone : '-'}} </p>
                <p><strong>Szállítási cím:</strong> {{$order->shipping_address}} </p>
                <p><strong>Számlázási cím:</strong> {{$order->billing_address ? $order->billing_address : $order->shipping_address}} </p>
                <p><strong>Fizetési mód:</strong> {{ $order->payment_method }}</p>
                <p><strong>Dátum:</strong> {{ $order->created_at->format('Y-m-d') }}</p>
                <p><strong>Státusz:</strong> {{ $order->status }}</p>
            </div>
                <div class="items-container">
                    @php
                        $cartData = json_decode($order->cart_data, true);
                    @endphp
                    <p><strong>Termékek:</strong></p>
                    <div class="items">
                        <p> 
                            @foreach($cartData as $item)
                                <p>{{ $item['name'] }} (x{{ $item['quantity'] }})</p>
                            @endforeach
                        </p>
                    </div>
                    <p><strong>Fizetendő: {{$order->total_price}} Ft</strong></p>
                    <div class="form-container">
                    <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                        @csrf
                        <label for="status">Státusz frissítése:</label>
                        <select name="status" id="status" class="form-control">
                            <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Függőben</option>
                            <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Teljesítve</option>
                            <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Törölve</option>
                        </select>
                        <button type="submit" class="btn btn-primary mt-2 btn-det">Mentés</button>  
                        
                    </form>   
                    <a href="{{ route('admin.order.delete', $order->id) }}" class="btn btn-danger btn-del det-del">Rendelés törlése</a>
                </div>                       
            </div>
           
        </div>
    </div>
</body>
</html>