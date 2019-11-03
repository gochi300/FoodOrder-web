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
        <div class="panel-body full-height" style="padding: 40px;">
        <h3>{{$product->productName}}</h3><hr>
        <div class="row">
        <div class="col-md-5 float-left">
            <img class="card-img-top " src="{{URL::asset('/images/'.$product->productImage)}}" alt="Card image cap">
        </div>
        <div class="col-md-12">Price:  {{"K".$product->productPrice}} </div>
        <div class="col-md-12">Category:  {{$product->productCategory}} </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="btn btn-lg btn-link float-right my-4">Edit</a>
            </div>
        </div>
        </div> 
    </div>
</div>



@endsection 