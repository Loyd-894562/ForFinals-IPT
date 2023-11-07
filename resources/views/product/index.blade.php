@extends('base')

@include('navbar')

@section('content')
<div class="container ">
    <div class="row">
      <div class="col-md-12 mt-2" >
        <div class="flex">
            <h1>Product List</h1>
            <a href="/product/create" type="button" class="btn float-end mb-lg-2 text-white" style="background-color:#0077b6" >
                <i class="fa-solid fa-user-plus text-white"></i> Add Product
              </a>
        </div>
      </div>
      <table class="table table-bordered ">
        <thead style="background-color: #0077b6" class="text-white text-center" >
        <tr>
            {{-- <th>Product ID</th> --}}
            <th>Name</th>
            <th>Quantity</th>
            <th>Serial Number</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($product as $product)
            <tr>
                {{-- <td>{{ $product->id }}</td> --}}
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->serial_number }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <div class="d-flex text-white text-center">
                        <a href="{{ url('/product/edit/' . $product->id) }}"
                            class="btn btn-sm text-white" style="background-color:#0077b6; margin-right:5; height: 30px;"
                            title="Edit Product">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form method="POST" action="{{ url('/product/' . $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm text-white" style="background-color:#da1b3e; height: 30px;" title="Delete Product">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>
    </div>
  </div>

@endsection
