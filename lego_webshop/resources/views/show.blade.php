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

    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div id="cart-message" class="alert alert-success" style="display: none;">
            <strong>A termék sikeresen hozzáadva a kosárhoz.</strong>
        </div>

        <h1>{{ $product->name }}</h1>
        <div class="inner-container">
            <div class="left-side">
                <div class="gallery-box">
                    <img src="{{ $product->image_url ?? '/images/placeholder.jpg' }}" alt="Gallery Image" class="gallery-image" onclick="setMainImage('{{  $product->image_url ?? '/images/placeholder.jpg'  }}')">
                    <img src="{{ '/images/product_images/product1.jpg' }}" alt="Gallery Image" class="gallery-image" onclick="setMainImage('{{ '/images/product_images/product1.jpg' }}')">
                    <img src="{{ '/images/product_images/product2.jpg' }}" alt="Gallery Image" class="gallery-image" onclick="setMainImage('{{ '/images/product_images/product2.jpg' }}')">
                    <img src="{{ '/images/product_images/product3.jpg' }}" alt="Gallery Image" class="gallery-image" onclick="setMainImage('{{ '/images/product_images/product3.jpg' }}')">
                </div>
                <div class="image-box">
                    <img src="{{ $product->image_url ?? '/images/placeholder.jpg' }}" id="mainImage" class="current-image" alt="{{ $product->name }}">
                </div>
                <div class="actions-box">
                        <div class="desc">                
                            <h5>Leírás:</h5>
                            <p class="description">{{ $product->description }}</p>
                        </div>   

                        <div class="infos">
                            @if($product->category == 'Other')
                                <p class="info">Kategória: Egyéb</p>
                            @else
                                <p class="info">Kategória: {{ $product->category }}</p>
                            @endif
                            @if($product->stock != 0)
                                <p class="info">Raktáron</p>
                            @else
                                <p class="info">Elfogyott</p>
                            @endif
                        </div>
                        <div class="price">
                            <p class="info">Ár: {{ $product->price }}FT</p>
                            <a class="btn-cart" onclick="addToCart({{ $product->id }}, '{{ $product->name }}', {{ $product->price }}, 1)">Kosárba</a>
                            
                        </div>
                </div>
            </div>

            <div class="right-side">
                <div class="description-box">
                    <div class="best-review">
                        @if($bestReview)

                            <p><strong>{{ $bestReview->user->name }}</strong> értékelése:</p>
                            
                            <p>Értékelés: 
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $bestReview->rating)
                                    <span>⭐</span>
                                @else
                                    <span class="empty">☆</span>
                                @endif
                                @endfor
                            </p>
                            <p>{{ $bestReview->review }}</p>
                            <p><em>Értékelés dátuma: {{ $bestReview->created_at->format('Y-m-d') }}</em></p>
                        @else
                            <p>Nincs még értékelés a termékről.</p>
                        @endif
                    </div>
                </div>
                
                <div class="reviews-box">
                    <p>Értékelés:
                                @for ($i = 0; $i < 5; $i++)
                                @if ($i + 0.5 <= $product->rating_avg)
                                    <span>⭐</span>
                                @else
                                    <span class="empty">☆</span>
                                @endif
                                @endfor
                    <p>({{ $product->rating_count }} értékelés)</p>
                    <div class="review-container">
                        @if(Auth::check())
                            <form id="review-form" action="{{ route('reviews.add', $product->id) }}" method="POST" class="review-form">
                                @csrf
                                <div class="form-group">
                                    <label for="rating">Értékelés (1-5):</label>
                                    <select id="rating" name="rating" required class="form-control">
                                        <option value="" disabled selected>Válassz egy értékelést...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="review">Vélemény:</label>
                                    <textarea id="review" name="review" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-submit">Értékelés küldése</button>
                                </div>
                            </form>
                        @else
                        <div class="form-group">
                                    <label for="rating">Értékelés (1-5):</label>
                                    <input type="number" id="rating" name="rating" min="1" max="5" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="review">Vélemény:</label>
                                    <textarea id="review" name="review" rows="4" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                            <button id="login-btn" class="btn btn-submit">Értékelés küldése</button>
                            </div>
                        @endif

                        <div id="login-modal" class="modal">
                            <div class="modal-content">
                                <h3>Be kell jelentkezned, hogy értékelést adhass!</h3>
                                <a href="{{ route('login') }}" class="btn btn-link">Kattints ide a bejelentkezéshez</a>
                                <button onclick="closeModal()" class="btn btn-close"></button>
                            </div>
                        </div>
                        <div id="overlay" class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="similarProducts">
            <h3>Hasonló termékek</h3>
            <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-between">
                            @foreach($similarProducts->take(4) as $similarProduct)
                                <div class="card">
                                    <a href="{{ route('product.show', ['id' => $similarProduct->id]) }}" class="card-link">
                                        <img src="{{ $similarProduct->image_url ?? '/images/placeholder.jpg' }}" class="card-img-top" alt="{{ $similarProduct->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $similarProduct->name }}</h5>
                                            <p class="card-text">{{ $similarProduct->description }}</p>
                                            <p class="text-success"><strong>{{ number_format($similarProduct->price, 0, ',', ' ') }} Ft</strong></p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-between">
                            @foreach($similarProducts->skip(4)->take(4) as $similarProduct)
                                <div class="card">
                                    <a href="{{ route('product.show', ['id' => $similarProduct->id]) }}" class="card-link">
                                        <img src="{{ $similarProduct->image_url ?? '/images/placeholder.jpg' }}" class="card-img-top" alt="{{ $similarProduct->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $similarProduct->name }}</h5>
                                            <p class="card-text">{{ $similarProduct->description }}</p>
                                            <p class="text-success"><strong>{{ number_format($similarProduct->price, 0, ',', ' ') }} Ft</strong></p>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel1" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <hr>
    </div>
</div>
</div>




<script>
    document.getElementById('login-btn')?.addEventListener('click', function() {
        showModal();
    });

    function showModal() {
        document.getElementById('login-modal').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('login-modal').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
    function setMainImage(imageUrl) {
    document.getElementById('mainImage').src = imageUrl;
}
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function addToCart(productId, productName, productPrice, quantity) {
    $.ajax({
        url: "{{ route('cart.add') }}",
        method: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            product_id: productId,
            product_name: productName,
            product_price: productPrice,
            quantity: quantity
        },
        success: function(response) {
            var cartMessage = document.getElementById('cart-message');
            cartMessage.style.display = 'block';  

            setTimeout(function() {
                cartMessage.style.display = 'none';
            }, 5000); 
        },
        error: function(xhr, status, error) {
            alert("Hiba történt a kosárba tétel közben.");
        }
    });
    }
</script>






@include('layouts.footer')
</body>
</html>