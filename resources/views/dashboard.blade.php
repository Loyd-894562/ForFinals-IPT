@extends('base')

@include('navbar')

@section('content')

<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('send-notification') }}" method="POST" class="mb-3">
    @csrf
    <button type="submit" class="btn btn-primary">Send Notification</button>
</form>

    @auth
    @if(Auth::user()->isAdmin())
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center mt-2">Hi there! {{ $user->name }}</h1>
                <h2 class="card-subtitle mb-4">All Registered Users</h2>
                
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    @foreach ($regUser as $user)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $user->name }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </div>
    @endif
@endauth
