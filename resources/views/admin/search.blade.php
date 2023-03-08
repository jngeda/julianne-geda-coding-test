@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
                <div>
                    <a href="{{ url('add-products')}}" class="btn btn-primary pull-right">Add Product</a>
                    <h1 align="center"><i class="fa fa-tags"></i> Product List</h1> 
                </div>
            <hr>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <div class="tile-body">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                <tr>
                                    <th class="text-center" style="font-weight:bold"> # </th>
                                    <th class="text-center" style="font-weight:bold"> Name </th>
                                    <th class="text-center" style="font-weight:bold"> Price </th>
                                    <th class="text-center" style="font-weight:bold"> Image </th>
                                    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $item)
                                        <tr>
                                            <td align="center">{{ $item->id}}</td>
                                            <td align="center">{{ $item->name}}</td>
                                            <td align="center">{{ $item->price}}</td>
                                            <td>
                                                <img src="{{ asset('assets/products/'.$item->image)}}" class="product-image" alt="{{$item->image}}">
                                            </td>

                                            <td class="text-center">
                                                <div class="btn-group" role="group" aria-label="Second group">
                                                    <a href="{{ url('detail-product/'.$item->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ url('add', $item->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <ul class="pagination justify-content-end color-red">
                                {{$products->links('pagination::bootstrap-4')}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
@endsection