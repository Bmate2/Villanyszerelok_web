@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Termék részletei</h1>

    <p><strong>Név:</strong> {{ $product->name }}</p>
    <p><strong>Leírás:</strong> {{ $product->description }}</p>
    <p><strong>Ár:</strong> {{ $product->price }} Ft</p>
    <p><strong>Készlet:</strong> {{ $product->stock }}</p>

    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Szerkesztés</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Törlés</button>
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Vissza a listához</a>
</div>
@endsection
