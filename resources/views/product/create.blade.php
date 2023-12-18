@extends('base')

@include('navbar')

@section('content')

    <div class="container col-md-6 offset-md-3 mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center">Create a Listing</h1>
                <hr>

                <form action="{{ '/product' }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="square_meter">Total Square Meter</label>
                        <input type="number" name="square_meter" id="square_meter" class="form-control">
                        @error('square_meter')
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

                    <div class="form-group mb-3">
                        <label for="image">Upload Picture</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary px-5" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
