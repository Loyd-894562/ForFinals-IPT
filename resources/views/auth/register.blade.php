
@extends('base')

@section('content')
<div class="container mt-5 nb-5">
    <div class="row justify-content-center">
        <a href="/">
        <div class="card mx-2" style="max-width: 30rem; background-color: #000058; color: white;">
            <div class="brand d-flex justify-content-center align-items-center">
                <img src="{{ asset('photos/logo1.png') }}" alt="Luxury Homes Realty Inc. Logo" class="logo"
                    style="width: 500px;">
            </div>
</a>
        </div>
        

        <div class="card mx-2" style="max-width: 38rem; background-color: #000058; color: white;">
            <div class="card-header text-center">
                <h1>Create an Account</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('register.post') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                   <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        class="form-control">
                    @error('password_confirmation')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/login' }}" class="text-white">Already have an account? Click here to Log
                                in.</a>
                        </div>
                        <button class="btn btn-primary px-5" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .card-logo {
        max-width: 100px; /* Adjust the size as needed */
        float: left;
        margin-right: 20px; /* Adjust the spacing as needed */
    }

    body {
        margin: 0;
        padding: 0;
        height: 100vh;
        background-image: url('https://media.salecore.com/salesaspects/shared/GlobalImageLibrary/Responsive/ElegantSeller/real-estate-home-exterior-40-1760-1000.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Nunito', sans-serif;
    }
</style>

@endsection
