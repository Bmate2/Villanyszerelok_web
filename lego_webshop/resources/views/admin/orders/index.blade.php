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
    



    <div class="order-container">
    @if(session('success'))
    <div class="alert alert-success" id="alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('warning'))
    <div class="alert alert-warning" id="alert-warning">
        {{ session('warning') }}
    </div>
    @endif
    <h1><strong>Rendelések</strong></h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Felhasználó</th>
                <th>Termékek</th>
                <th>Dátum</th>
                <th>Státusz</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                @php
                    $cartData = json_decode($order->cart_data, true);
                @endphp
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user ? $order->user->name . ' (ID: ' . $order->user->id . ')' : 'Vendég' }}</td>
                <td>                        
                    @foreach($cartData as $item)
                        <p>{{ $item['name'] }} (x{{ $item['quantity'] }})</p>
                    @endforeach
                </td>
                <td>{{ $order->created_at->format('Y-m-d') }}</td>
                <td>{{ $order->status }}</td>
                <td>
    <a href="{{ route('admin.order.details', $order->id) }}" class="btn btn-info btn-det me-2">Részletek</a>
    <form action="{{ route('admin.order.delete', $order->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-del">Törlés</button>
    </form>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>




</body>
</html>