<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lego-Webshop</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <style>
        #gomb{
            background-color: yellow; 
            color: black;
        }
    </style>
</head>
<body>
@include('layouts.navbar')
<div class="container">
<form  method="POST" action="">
    <div class="flex justify-center">
        <h1 class="text-3xl text-yellow-600 font-bold">Áru hozzáadás!</h1>
    </div>
    <div class="relative mt-6">
        <x-text-input id="name" 
                        class="block mt-1 w-full border-4 border-yellow-400 rounded-lg p-3 focus:ring-yellow-500 font-bold"  
                        name="name" :value="old('name')" 
                        required autofocus 
                        placeholder="Árunév"/>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div class="relative mt-6">
        <x-text-input id="price" 
                        class="block mt-1 w-full border-4 border-yellow-400 rounded-lg p-3 focus:ring-yellow-500 font-bold"  
                        name="price" :value="old('price')" 
                        required autofocus 
                        placeholder="Ár"/>
        <x-input-error :messages="$errors->get('price')" class="mt-2" />
    </div>
    <div class="relative mt-6">
        <x-text-input id="image_url" 
                        class="block mt-1 w-full border-4 border-yellow-400 rounded-lg p-3 focus:ring-yellow-500 font-bold"  
                        name="image_url" :value="old('image_url')" 
                        required autofocus 
                        placeholder="Kép URL"/>
        <x-input-error :messages="$errors->get('image_url')" class="mt-2" />
    </div>
    <div class="relative mt-6">
        <x-text-input id="description" 
                        class="block mt-1 w-full border-4 border-yellow-400 rounded-lg p-3 focus:ring-yellow-500 font-bold"  
                        name="description" :value="old('description')" 
                        required autofocus 
                        placeholder="Leírás"/>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>
    <div class="flex items-center justify-center mt-4">
        <button id="gomb"type="submit" class="py-3 px-6 rounded-lg shadow-lg border-4 border-yellow-600 hover:bg-yellow-600 transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
            Hozzáadás
        </button>
    </div>
</form>
</div>

@include('layouts.footer')
</body>
</html>