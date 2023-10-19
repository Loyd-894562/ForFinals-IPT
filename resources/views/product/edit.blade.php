@extends('base')

@include('navbar')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <h1 class="text-center">Edit Product</h1>
        <hr>

        <form  action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="dosage">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control" value="{{ $product->quantity }}">
                @error('dosage')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="expiry_date">Serial Number</label>
                <input type="number" name="serial_number" id="serial_number" class="form-control" value="{{ $product->serial_number }}">
                @error('expiry_date')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex">
                <button class="btn btn-primary px-5" type="submit">Save Changes</button>
            </div>
        </form>
    </div>

@endsection





