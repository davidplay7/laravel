<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>

    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>

    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection
