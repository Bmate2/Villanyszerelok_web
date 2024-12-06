<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>

@include('layouts.navbar')

<div>
    <div class="product-container">
        <h1>{{ $product->name }}</h1>
        <div class="inner-container">
            <!-- Bal oldali rész -->
            <div class="left-side">
                <div class="gallery-box">
                    <!-- Képek felsorolása -->
                     
                </div>
                <div class="image-box">
                    <!-- Aktuális kép nagyban -->
                    <img src="{{ $product->image_url ?? '/images/placeholder.jpg' }}" class="current-image" alt="{{ $product->name }}">
                </div>
                <div class="actions-box">
                    <a><p class="action">Kosárba</p></a>
                    <a><p class="action">Értékelés</p></a>
                    <p></p>
                    <!-- Funkciók, pl kosárba helyezés -->
                </div>
            </div>

            <!-- Jobb oldali rész -->
            <div class="right-side">
                <!-- Leírás -->
                <div class="description-box">
                    <!-- A leírás helye -->
                    <p>{{ $product->description }}</p>
                </div>
                
                <!-- Értékelés -->
                <div class="reviews-box">
                    <!-- Az értékelés helye -->
                    <p>Értékelés: {{ $product->rating_avg }} ({{ $product->rating_count }} értékelés)</p>
                </div>
            </div>
        </div>
    </div>
</div>


@if(Auth::check())
    <form id="review-form" action="{{ route('reviews.add', $product->id) }}" method="POST">
        @csrf

        <div>
            <label for="rating">Értékelés (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
        </div>


        <div>
            <label for="review">Vélemény:</label>
            <textarea id="review" name="review" rows="4" cols="50"></textarea>
        </div>


        <div>
            <button type="submit">Értékelés küldése</button>
        </div>
    </form>
@else

    <button id="login-btn">Login to leave a review</button>
@endif


<div id="login-modal" style="display:none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.8); padding: 20px; border-radius: 8px; color: white; z-index: 1000;">
    <h3>You need to be logged in to submit a review.</h3>
    <a href="{{ route('login') }}" style="color: #ff9800;">Click here to login</a>
    <button onclick="closeModal()">Close</button>
</div>


<div id="overlay" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 999;"></div>

<script>

    document.getElementById('review-form')?.addEventListener('submit', function(event) {
        event.preventDefault();


        if (!{{ Auth::check() ? 'true' : 'false' }}) {
            showModal(); 
        } else {
            this.submit(); 
        }
    });

    function showModal() {
        document.getElementById('login-modal').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('login-modal').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
</script>

<div style="height:300px">

</div>






@include('layouts.footer')
</body>
</html>