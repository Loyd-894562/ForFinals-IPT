@extends('base')

@include('navbar')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="flex">
                        <h1>Log List</h1>
                    </div>
                </div>
            </div>
            
            <table class="table table-bordered">
                <thead style="background-color: #0077b6" class="text-white text-center">
                    <tr>
                        {{-- <th>Product ID</th> --}}
                        <th>Timestamp</th>
                        <th>Log Entry</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($logEntries as $logEntry)
                    <tr>
                        {{-- <td>{{ $med->id }}</td> --}}
                        <td>{{ $logEntry->formattedCreatedAt }}</td>
                        <td>{{ $logEntry->log_entry }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
