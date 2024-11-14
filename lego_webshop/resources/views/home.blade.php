<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>
  
@include("layouts.navbar")

<div class="container py-5">
    <h1 class="text-center mb-4">Üdvözlünk a Lego Webshopban!</h1>

    <h2 class="text-center mt-5">Legnépszerűbb Termékek</h2>

    <div id="productCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-between">
                    @foreach($products->take(4) as $product)
                        <div class="card">
                            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="card-link">
                                <img src="{{ $product->image_url ?? '/images/placeholder.jpg' }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="text-success"><strong>{{ number_format($product->price, 0, ',', ' ') }} Ft</strong></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-between">
                    @foreach($products->skip(4)->take(4) as $product)
                        <div class="card">
                            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="card-link">
                                <img src="{{ $product->image_url ?? '/images/placeholder.jpg' }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <p class="text-success"><strong>{{ number_format($product->price, 0, ',', ' ') }} Ft</strong></p>
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


@include('layouts.footer')

</body>
</html>
