@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <h3 class="text-center">Juice Order Form</h3>
                                <div class="col-md-12">
                                    <label for="juicename">Juice Name</label>
                                    <input class="form-control @error('juicename') is-invalid @enderror" type="text"
                                        name="juicename" value="{{ $product->juicename }}">
                                    @error('juicename')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="quantity">Quantity</label>
                                    <input class="form-control @error('quantity') is-invalid @enderror" type="text"
                                        name="quantity" value="{{ $product->quantity }}">
                                    @error('quantity')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="customername">Customer Name</label>
                                    <input class="form-control @error('customername') is-invalid @enderror" type="text"
                                        value="{{ $product->customername }}" name="customername">
                                    @error('customername')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input class="form-control @error('phoneNumber') is-invalid @enderror" type="text"
                                        value="{{ $product->phoneNumber }}" name="phoneNumber">
                                    @error('phoneNumber')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="address">Address</label>
                                    <input class="form-control @error('address') is-invalid @enderror"
                                        value="{{ $product->address }}" type="text" name="address">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-button mt-3">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
