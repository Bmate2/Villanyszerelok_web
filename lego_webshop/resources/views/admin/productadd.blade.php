<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/productadd.css') }}">
</head>
<body>
@include('layouts.navbar')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@elseif(session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif
<form method="POST" action="{{ route('admin.product.store') }}">
    @csrf
    <div class="product-container">
        <div class="center-flex">
            <h1 class="text-3xl text-yellow-600 font-bold">Áru hozzáadás</h1>
        </div>
        <div class="relative-container">
            <x-text-input id="name" 
                            class="mezo"  
                            name="name" :value="old('name')" 
                            required autofocus 
                            placeholder="Árunév"/>
        </div>
        <div class="relative-container">
            <x-text-input id="price" 
                            class="mezo"   
                            name="price" :value="old('price')" 
                            required autofocus 
                            placeholder="Ár"/>
        </div>
        <div class="relative-container">
            <x-text-input id="image_url" 
                            class="mezo"   
                            name="image_url" :value="old('image_url')" 
                            autofocus 
                            placeholder="Kép URL"/>
        </div>
        <div class="relative-container">
            <x-text-input id="description" 
                            class="mezo"   
                            name="description" :value="old('description')" 
                            required autofocus 
                            placeholder="Leírás"/>
        </div>
        <div class="relative-container">
            <x-text-input id="quantity" 
                            class="mezo"   
                            name="quantity" :value="old('quantity')" 
                            required autofocus 
                            placeholder="Mennyiség"/>
        </div>
        <div class="relative-container">
            <x-text-input id="category" 
                            class="mezo"  
                            name="category" :value="old('category')" 
                            autofocus 
                            placeholder="Kategória"/>
        </div>
        <div class="center-container">
            <button id="gomb" type="submit">
                Hozzáadás
            </button>
        </div>
    </div>
</form>

@include('layouts.footer')
</body>
</html>