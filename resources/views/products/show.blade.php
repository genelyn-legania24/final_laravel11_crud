@extends('layouts.app')
@section('content')
<div class="row justify-content-center mt-3">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- Left Side: Text Info -->
                    <div class="col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">
                                {{ $product->code }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">
                                {{ $product->name }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Quantity:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">
                                {{ $product->quantity }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">
                                {{ $product->price }}
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                            <div class="col-md-8" style="line-height: 35px;">
                                {{ $product->description }}
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Image -->
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-fluid rounded" style="max-height: 250px;">
                        @else
                            <p>No image uploaded.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
