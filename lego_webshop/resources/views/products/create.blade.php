﻿@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Új termék hozzáadása</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Termék neve</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Leírás</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Ár</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Készlet</label>
            <input type="number" class="form-control" id="stock" name="stock" required>
        </div>
        <button type="submit" class="btn btn-primary">Mentés</button>
    </form>
</div>
@endsection
