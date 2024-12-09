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
                                    <th class="name">Termék</th>
                                    <th class="quantity">DB</th>
                                    <th class="price">Ár</th>
                                    <th class="actions"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr>
                                        <td class="name">{{ $item['name'] }}</td>
                                        <td class="quantity">{{ $item['quantity'] }}</td>
                                        <td class="price">{{ $item['price'] * $item['quantity'] }} Ft</td>
                                        
                                        <td class="action">
                                            <form action="{{ route('cart.update', ['product_id' => $item['id'], 'action' => 'decrease']) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="cart-action">➖</button>
                                            </form>
                                            <form action="{{ route('cart.update', ['product_id' => $item['id'], 'action' => 'increase']) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="cart-action">➕</button>
                                            </form>
                                            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="cart-action">🗑️</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    <a href="{{ route('aruk') }}"><button type="submit" class="empty-cart-btn">Adj még hozzá termékeket</button></a>
            </div>
            <p class="cart-text">Összesen: {{ array_sum(array_map(function ($item) {
                return $item['price'] * $item['quantity'];
            }, $cart)) }} Ft</p>
            <hr>
            <div class="cart-bottom">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button type="submit" class="idkman">Kosár ürítése</but>
                </form>
                <form action="{{ route('checkout') }}" method="GET">
                    @csrf
                    <button type="submit" class="empty-cart-btn">Tovább a rendeléshez</button>
                </form>
            </div>
            @else
                <p class="cart-text">Üres a kosár</p>
                <a href="{{ route('aruk') }}"><button type="submit" class="empty-cart-btn">Adj hozzá termékeket</button></a>
        @endif
    </div>
</div>





@include('layouts.footer')
</body>
</html>
