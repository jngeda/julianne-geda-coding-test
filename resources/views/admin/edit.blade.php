@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Edit Product</h1>
        </div>
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Price</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="col-md-12"> 
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12"> 
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection