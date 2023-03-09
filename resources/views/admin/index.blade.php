@extends('layouts.dashboard')

@section('content')
    <div class="card">
        <div class="card-body"> 
            <div class="" style="text-align: center">
                <img src="images/coffee_logo.png" width="255">
                <hr>
            </div>       

            <div class="main-search-input-wrap">
                <form class="navbar-form" type="get" action="/search" >
                    <div class="input-group no-border main-search-input-wrap">
                    <input id="searchBox" class="form-control" type="search" name="query" placeholder="Search here...">
                    <button id="searchButton" type="submit" class="btn btn-primary btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                    </div>
                </form>             
            </div>
        </div>
        <div class="card-footer">
            <hr>
        </div>
    </div>
    
@endsection