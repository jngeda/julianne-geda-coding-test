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
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $products->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $products->price}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <textarea rows="14" class="form-control" name="description" wrap="soft">{{ $products->description }}</textarea>
                    </div>
                    @if($products->image)
                        <img src="{{ asset('assets/products/'.$products->image)}}" alt="">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control" >
                    </div>
                    <div class="col-md-12"> 
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection