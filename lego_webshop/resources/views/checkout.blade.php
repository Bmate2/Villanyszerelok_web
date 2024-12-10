<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop - Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>

@include('layouts.navbar')
<div>
<div class="data-container my-5">
    <h2>Rendelés leadása</h2>


    <form action="{{ route('checkout.store') }}" method="POST">
    @csrf

    <h4>Szállítási információk</h4>
    <div class="mb-3">
        <label for="customer_name" class="form-label">*Név</label>
        <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ old('customer_name') }}" required>
    </div>

    <div class="mb-3">
        <label for="shipping_address" class="form-label">*Szállítási cím</label>
        <input type="text" class="form-control" id="shipping_address" name="shipping_address" value="{{ old('shipping_address') }}" required>
    </div>

    <div class="mb-3">
        <label for="billing_address" class="form-label">Számlázási cím</label>
        <input type="text" class="form-control" id="billing_address" name="billing_address" value="{{ old('billing_address') }}">
    </div>

    <div class="mb-3">
        <label for="customer_email" class="form-label">*Email cím</label>
        <input type="email" class="form-control" id="customer_email" name="customer_email" value="{{ old('customer_email') }}" required>
    </div>

    <div class="mb-3">
        <label for="customer_phone" class="form-label">Telefon</label>
        <input type="text" class="form-control" id="customer_phone" name="customer_phone" value="{{ old('customer_phone') }}">
    </div>
    <p class="to-fill">(A *-al jelölt mezők kitöltése kötelező)</p>
    <h4>Kosár összesítő</h4>
    <table class="table">
        <thead>
            <tr>
                <th class="name">Termék</th>
                <th class="quantity">DB</th>
                <th class="price">Ár</th>
                <th class="total">Összesen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>{{ $item['price'] }} Ft</td>
                    <td>{{ $item['price'] * $item['quantity'] }} Ft</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p><strong>Összesen: </strong> {{ $totalPrice }} Ft</p>


    <div class="mb-3">
        <label for="payment_method" class="form-label">Fizetési mód</label>
        <select class="form-select" id="payment_method" name="payment_method" required>
            <option value="credit_card">Bankkártya</option>
            <option value="paypal">PayPal</option>
            <option value="cash_on_delivery">Készpénzes fizetés utánvétellel</option>
        </select>
    </div>
    <div class="cart-bottom">
        <a href="{{ route('cart.show') }}" class="order-btn btn-secondary">Vissza a kosárhoz</a>
        <button type="submit" class="order-btn">Rendelés leadása</button>
    </div>
    
</form>
</div>
</div>

@include('layouts.footer')

</body>
</html>
