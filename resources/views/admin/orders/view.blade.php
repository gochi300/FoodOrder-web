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
        <h3>Products</h3><hr>
        <div class="row">
        @foreach($orders as $order)
        <div class="col-md-12">
            {{$order->productName}}
        </div>
        @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('/order-ready/'.$order->orderNumber) }}" class="btn btn-lg btn-link float-right my-4">Ready</a>
            </div>
        </div>
        </div> 
    </div>
</div>



@endsection 