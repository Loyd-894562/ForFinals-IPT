@extends('base')

@include('navbar')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="text-white">Property Listing</h1>
        <a href="/product/create" type="button" class="btn text-white" style="background-color: #000058;">
            <i class="fa-solid fa-user-plus text-white"></i> Add Property
        </a>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($product as $product)
            <div class="col">
                <div class="card">
                 
                    <img src="{{ asset('photos/default.png') }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><strong>Total Square Meter:</strong> {{ $product->square_meter }}</p>
                        <p class="card-text"><strong>Price:</strong> {{ $product->price }}</p>

                        <div class="d-flex justify-content-end">
                            <a href="{{ url('/product/edit/' . $product->id) }}" class="btn btn-sm text-white" style="background-color: #000058; margin-right:5px;" title="Edit Product">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            @if (Auth::user()->isAdmin())
                                <form method="POST" action="{{ url('/product/' . $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm text-white" style="background-color: #000058;" title="Delete Product">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
