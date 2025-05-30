@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Details</h2>

    <div class="card">
        <div class="card-body">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->detail }}</p>
            <p>{{ $product->typep }}</p>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection