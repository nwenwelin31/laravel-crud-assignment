@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body shadow">
                        <form action="{{ route('product.store') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <h3 class="text-center">Juice Order Form</h3>
                                <div class="col-md-12">
                                    <label for="juicename">Juice Name</label>
                                    <input class="form-control" value="{{ old('juicename') }}" type="text" name="juicename" required>
                                    @error('juicename')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="quantity">Quantity</label>
                                    <input class="form-control" value="{{ old('quantity') }}" type="text" name="quantity" required>
                                    @error('quantity')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="customername">Customer Name</label>
                                    <input class="form-control" value="{{ old('customername') }}" type="text" name="customername" required>
                                    @error('customername')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="phoneNumber">Phone Number</label>
                                    <input class="form-control" value="{{ old('phoneNumber') }}" type="text" name="phoneNumber" placeholder="******" required>
                                    @error('phoneNumber')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="address">Address</label>
                                    <input class="form-control" value="{{ old('address') }}" type="text" name="address" placeholder="Address" required>
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-button mt-3">
                                    <a href="{{ route('product.index') }}" class="btn btn-outline-dark rounded">Back</a>
                                    <button type="submit" class="btn btn-outline-dark">Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
