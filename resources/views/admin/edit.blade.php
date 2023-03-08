@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Edit Product</h1>
        </div>
        <div class="card-body">

            <form action="{{ url('update-product', $products->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="container">
                    <div class="col-lg-12 p-2 main-section bg-white">
                        <div class="row m-0">
                            <div class="col-lg-4 left-side-product-box pb-3">
                                @if($products->image)
                                <img src="{{ asset('assets/products/'.$products->image)}}" class="border p-2">
                                @endif
                                <div class="col-md-12 pt-4">
                                    <input type="file" name="image" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="col-md-8 mb-3">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $products->name}}">
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="">Price</label>
                                    <input type="text" class="form-control" name="price" value="{{ $products->price}}">
                                </div>

                                <div class="col-md-8 mb-3">
                                    <label for="">Description</label>
                                    <textarea rows="7" class="form-control" name="description" wrap="soft">{{ $products->description }}</textarea>
                                </div>

                                <div class="col-md-12 text-center"> 
                                    <button type="submit" class="btn btn-primary pull-center">Update Product</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>



        </div>
    </div>
    
@endsection