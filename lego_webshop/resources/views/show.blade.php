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
                </div>
            </div>
        </div>
    </div>
</div>

<div style="height:300px">

</div>






@include('layouts.footer')
</body>
</html>