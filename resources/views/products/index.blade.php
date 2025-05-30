@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Product List</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Type</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->detail }}</td>
            <td>{{ $product->typep }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection