@extends('layout.app')

@section('content')
<h1>Our Products</h1>
<div class="row">
@foreach ($products as $product)
    <div class="col-md-4 mb-3">
        <div class="card">
            @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                <a href="{{ route('product.show', $product->slug) }}" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection
