<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kosár - Lego-Webshop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>
@include("layouts.navbar")

<div>
    <div class="cart-holder">
        <h1>A kosarad</h1>
<div class="items">
        @if (count($cart) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Termék</th>
                        <th>DB</th>
                        <th>Ár</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cart as $item)
    <tr>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['quantity'] }}</td>
        <td>{{ $item['price'] * $item['quantity'] }} Ft</td>
        
        <td class="action">
            <form action="{{ route('cart.update', ['product_id' => $item['id'], 'action' => 'decrease']) }}" method="POST">
                @csrf
                <button type="submit" style="border: none; background: none; cursor: pointer; color:black;">-</button>
            </form>
        </td>

        <td class="action">
            <form action="{{ route('cart.update', ['product_id' => $item['id'], 'action' => 'increase']) }}" method="POST">
                @csrf
                <button type="submit" style="border: none; background: none; cursor: pointer; color:black;">+</button>
            </form>
        </td>

        <td class="action">
            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                @csrf
                <button type="submit" style="border: none; background: none; cursor: pointer;">🗑️</button>
            </form>
        </td>
    </tr>
@endforeach
                </tbody>
            </table>
</div>
            <p>Összesen: {{ array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, $cart)) }} Ft</p>
        @else
            <p>Üres a kosár</p>
        @endif

        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit">Kosár ürítése</button>
        </form>
    </div>
</div>





@include('layouts.footer')
</body>
</html>
