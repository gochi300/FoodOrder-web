@extends('layouts.admin')

@section('content')

<head>

<style type="text/css">

h3 {
   display: inline;
}

</style>

</head>

<!-- page -->
<div class="col-md-12">

        <div class="panel panel-default full-height">
        <div class="panel-body" style="padding: 40px;">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Products</li>
        </ol>

        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/product-create') }}" class="btn btn-dark float-right my-4">Add</a>
            </div>
        </div>

        <table class="table table-condensed">
            <thead><tr>
            <th>Name</th><th>Price</th><th>Category</th><th>Last updated</th><th>Actions</th>
            </tr><thead>

            @foreach($products as $product)
            <tbody><tr><td>{{$product->productName}}</td><td>K{{$product->productPrice}}</td><td>{{$product->productCategory}}</td><td>{{$product->updated_at}}</td>
            <td><a href="{{url('/product-view/'.$product->id)}}" class="btn btn-success btn-xs">View</a>
            <a href="{{url('/product-destroy/'.$product->id)}}" onclick="return confirm('Delete this item?');" class="btn btn-danger btn-xs">Delete</a></td>
            </tr></tbody>
            @endforeach
        </table>
        </div>
            <div class="d-flex justify-content-center">
                {{$products->links("pagination::bootstrap-4")}}
            </div>
	</div>
</div>

@endsection 