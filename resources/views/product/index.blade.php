@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <div>
                        <a href="{{ route('product.create') }}" class="btn btn-dark">Create</a>
                    </div>

                    <table class="table">
                        <thead>
                            <h1>Order List</h1>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Juice Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->juicename }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->customername }}</td>
                                    <td>{{ $product->phoneNumber }}</td>
                                    <td>{{ $product->address }}</td>
                                    <td>
                                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-dark">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('product.show',$product->id) }}" class="btn btn-outline-dark">
                                            <i class="fa fa-info"></i>
                                        </a>
                                        <form action="{{ route('product.destroy',$product->id) }}" method="post" class="d-inline-block" >
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-outline-dark">
                                                    <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
