@extends('base')

@include('navbar')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <h1 class="text-center">Create Product</h1>
        <hr>

        <form action="{{ '/product' }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="dosage">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control">
                @error('quantity')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="expiry_date">Serial Number</label>
                <input type="number" name="serial_number" id="serial_number" class="form-control">
                @error('serial_number')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            </div>

            <div class="form-group mb-3">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control">
                @error('price')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="d-flex">
                <button class="btn btn-primary px-5" type="submit">Create</button>
            </div>
        </form>
    </div>

@endsection

