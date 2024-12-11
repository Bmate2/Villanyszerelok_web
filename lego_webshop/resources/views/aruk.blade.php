<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/aruk.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/paginator.css') }}">

</head>
<body>

@include('layouts.navbar')
<div class="container my-5">
    <h1 class="text-center mb-4">Termékek</h1>

    <form method="GET" action="{{ route('aruk') }}" class="mb-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Keresés..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="category" class="form-select">
                    <option value="">Összes</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                            {{ $category == 'Other' ? 'Egyéb' : $category }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select name="sort" class="form-select">                   
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Ár: növekvő</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Ár: csökkenő</option>
                    <option value="popularity" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Legnépszerűbb</option>
                    <option value="rating" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Legjobban értékelt</option>
                    <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Legújabb</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary w-100 btn-helpme">Szűrés</button>
            </div>
        </div>
    </form>

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-4 mb-4">
            <a href="{{ route('product.show', $product->id) }}" class="product-click">
                <div class="card">
                    <img src="{{ $product->image_url ?? '/images/placeholder.jpg' }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <div class="flex">
                            <p class="card-text price">{{ $product->price }} Ft</p>
                            <p>({{ $product->rating_count }} értékelés)
                                @for ($i = 0; $i < 5; $i++)
                                @if ($i + 0.5 <= $product->rating_avg)
                                    <span>⭐</span>
                                @else
                                    <span class="empty">☆</span>
                                @endif
                                @endfor
                        </div>
                    </div>
                </div>
            </a>
            </div>
        @empty
            <p class="text-center">Nincsenek termékek a megadott szűrők alapján.</p>
        @endforelse
    </div>

    <div class="d-flex justify-content-center">
        {{ $products->links('pagination.custom') }}
    </div>
</div>


@include('layouts.footer')
</body>
</html>