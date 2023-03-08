@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Product Detail</h1>
        </div>
        <hr>

        <div class="card-body">
            <div class="container">
                <div class="col-lg-12 p-2 main-section bg-white">
                    <div class="row m-0">
                        <div class="col-lg-4 left-side-product-box pb-3">
                            <img src="{{ asset('assets/products/'.$products->image)}}" class="border p-2">
                        </div>
                        <div class="col-lg-8">
                            <div class="right-side-pro-detail border p-3 m-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="m-0 pt-3 ">{{$products->name}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="m-2 p-0 price-pro">PHP {{$products->price}} </p> 
                                        <hr class="p-0 m-0">
                                    </div>
                                    <div class="col-lg-12 pt-4">
                                        <h6 style="font-weight:bold">Description:</h6>
                                        <span>{{$products->description}}</span>
                                        <hr class="m-0 pt-2 mt-2">
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="tag-section">Created at: </p>
                                        <p class="tag-section">Modified at: </p>
                                    </div>
                                    
                                    <div class="col-lg-12 mt-3">
                                        <div class="row" role="group">
                                            <div class="col-lg-6 pb-2">
                                                <a href="#" class="btn btn-success w-100">Edit Product</a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="#" class="btn btn-danger w-100">Delete Product</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <hr>
        </div>
    </div>
@endsection