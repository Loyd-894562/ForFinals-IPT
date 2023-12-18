@extends('base')

@section('content')
<div class="container mt-5 mb-md-3 ">
    <div class="row justify-content-center">
        <!-- First Card -->
        <a href="/">
        <div class="card mx-2" style="max-width: 30rem; background-color: #000058; color: white;">
            <div class="brand d-flex justify-content-center align-items-center">
                <img src="{{ asset('photos/logo1.png') }}" alt="Luxury Homes Realty Inc. Logo" class="logo" style="width: 500px;">
                
            </div>
</a>
            
        </div>

        <!-- Second Card -->
        <div class="card mx-2" style="max-width: 40rem; background-color: #000058; color: white;">
            <div class="card-body">
                <h3 class="card-title text-center">Welcome to Luxury Homes Realty Inc.</h3>

                @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('login.post') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/register' }}" style="color: white;">Don't have an account? Click here to Sign up for an account.</a>
                        </div>
                        <button class="btn btn-primary px-5" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
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
