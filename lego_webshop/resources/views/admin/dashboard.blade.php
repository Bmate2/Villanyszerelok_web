<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
</head>
<body>
@include('layouts.navbar')
<div class="container py-5">
    @if(count($products) > 0)
        <div class="row">
            @for($i = 0; $i < count($products); $i++)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <a href="http://localhost:8001/product/{{$i+1}}" class="card-link no-underline">
                            <img src="{{ $products[$i]->image_url ?? asset('/images/placeholder.jpg') }}" class="card-img-top" alt="{{ $products[$i]->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $products[$i]->name }}</h5>
                                <p class="card-text">{{ $products[$i]->description }}</p>
                                <p class="text-success"><strong>{{ $products[$i]->price }} Ft</strong></p>
                                <p class="card-text">Raktáron: {{ $products[$i]->stock }}</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endfor

            <!-- Plusz gomb -->
            <div class="col-md-6 col-lg-4 mb-4 d-flex align-items-center justify-content-center">
                <div class="card">
                    <a href="" class="card-link">
                        <div class="card-body">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAOa2jJvD7LuyiNtc3iOKkS4zYwdOYglWdQA&s" class="card-img-top" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
@include('layouts.footer')
</body>
</html>