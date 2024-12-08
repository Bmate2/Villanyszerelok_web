<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/product.css') }}">

    <script>
        function flipCard(element) {
            const card = element.closest('.flip-card');
            card.classList.toggle('flipped');
        }

        setTimeout(function() {
            let successAlert = document.getElementById('alert-success');
            let warningAlert = document.getElementById('alert-warning');
            
            if (successAlert) {
                successAlert.style.display = 'none';
            }
            
            if (warningAlert) {
                warningAlert.style.display = 'none';
            }
        }, 10000);
    </script>
</head>
<body>
@include('layouts.navbar')
@if(session('success'))
<div class="alert alert-success" id="alert-success">
    {{ session('success') }}
</div>
@elseif(session('warning'))
<div class="alert alert-warning" id="alert-warning">
    {{ session('warning') }}
</div>
@endif
<div class="page-wrapper">
    <div class="content container py-5">
        <div class="row">
        @if(count($products) > 0)
            @for($i = 0; $i < count($products); $i++)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card flip-card">
                        <div class="flip-card-inner">
                            <!-- Front oldal -->
                            <div class="flip-card-front">
                                <div class="icons">
                                    <box-icon name="dots-horizontal-rounded" onClick="flipCard(this)"></box-icon>
                                    <form method="POST" action="{{route('admin.product.delete', ['id' => $products[$i]->id])}}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="all: unset;"><box-icon name="trash" class="text-danger"></box-icon></button>
                                    </form>
                                </div>
                                <a href="http://localhost:8001/product/{{$i+1}}" class="card-link" style="text-decoration: none !important;">
                                    <div class="image-container">
                                        <img src="{{ $products[$i]->image_url ?? asset('/images/placeholder.jpg') }}" class="card-img-top" alt="{{ $products[$i]->name }}">
                                    </div>
                                    <div class="info">
                                        <h5 class="card-title">{{ $products[$i]->name }}</h5>
                                        <p class="card-text">{{ $products[$i]->description }}</p>
                                        <p class="text-success"><strong>{{ intval($products[$i]->price) }} Ft</strong></p>
                                        <p class="card-text">Raktáron: {{ $products[$i]->stock }}</p>
                                    </div>
                                </a>
                            </div>
                
                            <!-- Back oldal -->
                            <div class="flip-card-back">
                                <form method="POST" action="{{ route('admin.product.update', ['id' => $products[$i]->id])}}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="icons">
                                        <box-icon name="dots-horizontal-rounded" onClick="flipCard(this)"></box-icon>
                                        <form method="POST" action="{{route('admin.product.delete', ['id' => $products[$i]->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="all: unset;"><box-icon name="trash" class="text-danger"></box-icon></button>
                                        </form>
                                    </div>
                                    <div class="info">
                                        <table>
                                            <tr>
                                                <td>Kép: </td>
                                                <td><input name="image_url" value="{{ $products[$i]->image_url }}" class="card-text"></td>
                                            </tr>
                                            <tr>
                                                <td>Név: </td>
                                                <td><input name="name" value="{{ $products[$i]->name }}" class="card-text"></td>
                                            </tr>
                                            <tr>
                                                <td>Kategória: </td>
                                                <td><input name="category" value="{{ $products[$i]->category }}" class="card-text"></td>
                                            </tr>
                                            <tr>
                                                <td>Leírás: </td>
                                                <td><textarea name="description">{{ $products[$i]->description }}</textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Ár: </td>
                                                <td><input name="price" value="{{ $products[$i]->price }}" class="card-text">Ft</td>
                                            </tr>
                                            <tr>
                                                <td>Raktáron: </td>
                                                <td><input name="stock" value="{{ $products[$i]->stock }}" class="card-text"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="center-container">
                                        <button id="gomb" type="submit">
                                            Módosítás
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endfor
        @endif
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card d-flex align-items-center justify-content-center" style="height: 100%; min-height: 300px;">
                <a href="{{route('admin.product.add')}}" class="card-link d-flex flex-column align-items-center justify-content-center" style="height: 100%; width: 100%;">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <box-icon name='plus' size="lg"></box-icon>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </div> 
    @include('layouts.footer')
</div> 
</body>
</html>