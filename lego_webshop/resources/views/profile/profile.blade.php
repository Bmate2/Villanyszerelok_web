<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
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

    <div class="profile-container">
            <div class="left">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <p class="card-text">Email: <br>{{ $user->email }}</p>
                    <button class="btn btn-warning left-btn" data-bs-toggle="modal" data-bs-target="#editProfileModal{{ $user->id }}">Profil szerkesztése</button>

                    <div class="modal fade" id="editProfileModal{{ $user->id }}" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProfileModalLabel">Profil szerkesztése</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="profile-update-form" action="{{ route('profile.update') }}" method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <div class="mb-3">
                                            <label for="name" class="form-label">Név</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <button type="button" id="save-profile" class="btn btn-primary mo-btn">Mentés</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-warning left-btn" data-bs-toggle="modal" data-bs-target="#changePasswordModal{{ $user->id }}">Jelszó módosítása</button>

                    <div class="modal fade" id="changePasswordModal{{ $user->id }}" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="changePasswordModalLabel">Jelszó módosítása</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="password-update-form" action="{{ route('profile.update-password') }}" method="POST">
                                        @csrf
                                        @method('PATCH')

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Új Jelszó</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Jelszó megerősítése</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                        </div>

                                        <div class="flex items-center gap-4">
                                            <button type="button" id="save-password" class="btn btn-primary mo-btn">Jelszó módosítása</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger left-btn" data-bs-toggle="modal" data-bs-target="#deleteProfileModal">
                        Profil törlése
                    </button>

                    <div class="modal fade" id="deleteProfileModal" tabindex="-1" aria-labelledby="deleteProfileModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteProfileModalLabel">Profil törlése</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Biztosan törölni szeretnéd a profilodat? Ez a művelet nem visszavonható.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                                    <form action="{{ route('profile.destroy') }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Törlés</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="right">
                <h2>Rendeléseim</h2>

                @if($orders->isEmpty())
                    <p>Jelenleg nincs rendelésed.</p>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Azonosító</th>
                                <th>Rendelés dátuma</th>
                                <th>Termékek</th>
                                <th>Összeg</th>
                                <th>Státusz</th>
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
                                <td class="action">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteOrderModal{{ $order->id }}">
                                        Rendelés törlése
                                    </button>


                                    <div class="modal fade" id="deleteOrderModal{{ $order->id }}" tabindex="-1" aria-labelledby="deleteOrderModalLabel{{ $order->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteOrderModalLabel{{ $order->id }}">Rendelés törlése</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Biztosan törölni szeretnéd ezt a rendelést? Ez a művelet nem visszavonható.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Törlés</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                            <th>Értékelt termék</th>
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
                                <td class="action">
                                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editReviewModal{{ $review->id }}">Szerkesztés</button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteReviewModal{{ $review->id }}">
                                        Értékelés törlése
                                    </button>

                                    <div class="modal fade" id="deleteReviewModal{{ $review->id }}" tabindex="-1" aria-labelledby="deleteReviewModalLabel{{ $review->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteReviewModalLabel{{ $review->id }}">Értékelés törlése</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Bezárás"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Biztosan törölni szeretnéd ezt az értékelést? Ez a művelet nem visszavonható.
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Törlés</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <div class="modal fade" id="editReviewModal{{ $review->id }}" tabindex="-1" aria-labelledby="editReviewModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editReviewModalLabel">Értékelés szerkesztése</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="mb-3">
                                                        <label for="rating{{ $review->id }}" class="form-label">Értékelés</label>
                                                        <input type="number" class="form-control" id="rating{{ $review->id }}" name="rating" value="{{ $review->rating }}" min="1" max="5">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="review{{ $review->id }}" class="form-label">Komment</label>
                                                        <textarea class="form-control" id="review{{ $review->id }}" name="review" rows="3">{{ $review->review }}</textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mo-btn">Frissítés</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>


@include('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
    document.getElementById('save-profile').addEventListener('click', function (event) {
    event.preventDefault();

    const form = document.getElementById('profile-update-form');
    const formData = new FormData(form);

    fetch('{{ route('profile.update') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            alert(data.message); 
            location.reload(); 
        } else {
            throw new Error('Hiba történt');
        }
    })
    .catch(error => {
        console.error('Hiba:', error);
        alert('Hiba történt a profil frissítése során.');
    });
});

document.getElementById('save-password').addEventListener('click', function (event) {
    event.preventDefault();

    const form = document.getElementById('password-update-form');
    const formData = new FormData(form);

    fetch('{{ route('profile.update-password') }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.message) {
            alert(data.message); 
            location.reload(); 
        } else {
            throw new Error('Hiba történt');
        }
    })
    .catch(error => {
        console.error('Hiba:', error);
        alert('Hiba történt a jelszó frissítése során.');
    });
});

</script>

</body>
</html>