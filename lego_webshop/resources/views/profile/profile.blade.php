<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>

@include('layouts.navbar')

<div class="container mt-5">
    <h1>Profilom</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Profil információk -->
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text">Email: {{ $user->email }}</p>
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Profil szerkesztése</a>
        </div>
    </div>

    <!-- Rendelések -->
    <h2>Rendeléseim</h2>

    @if($orders->isEmpty())
        <p>Jelenleg nincs rendelésed.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rendelés dátuma</th>
                    <th>Összeg</th>
                    <th>Statusz</th>
                    <th>Részletek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    @php
                        $cartData = json_decode($order->cart_data, true);
                    @endphp
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->created_at->format('Y-m-d') }}</td>
                    <td>
                            @if($cartData && is_array($cartData))
                                @foreach($cartData as $item)
                                    <p>{{ $item['name'] }} (x{{ $item['quantity'] }})</p>
                                @endforeach
                            @else
                                <p>Nincs termék</p>
                            @endif
                        </td>
                    <td>{{ number_format($order->total_price, 0, ',', ' ') }} Ft</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">Részletek</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <h2>Értékeléseim</h2>

@if($reviews->isEmpty())
    <p>Jelenleg nincs értékelésed.</p>
@else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Rendelés ID</th>
                <th>Értékelés</th>
                <th>Komment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->product->name }}</td>
                    <td>{{ $review->rating }} / 5</td>
                    <td>{{ $review->review }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</div>




@include('layouts.footer')

</body>
</html>