@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">
                    <table class="table">
                        <thead>
                            <h1>Order Detail</h1>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Juice Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Address</th>

                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->juicename }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->customername }}</td>
                                    <td>{{ $product->phoneNumber }}</td>
                                    <td>{{ $product->address }}</td>
                                </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
