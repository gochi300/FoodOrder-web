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
            <li class="breadcrumb-item active">Orders</li>
        </ol>

        <table class="table table-condensed">
            <thead><tr>
            <th>Order Id</th><th>Order Qty</th><th>Order Time</th><th>Order status</th>
            </tr><thead>

            @foreach($orders as $order)
            <tbody><tr><td>{{$order->orderNumber}}</td><td>{{$order->orderQty}}</td><td>{{$order->updated_at}}</td><td>{{$order->orderStatus}}</td>
            <td><a href="{{url('/order-view/'.$order->orderNumber)}}" class="btn btn-success btn-xs">View</a>
            <a href="{{url('/order-destroy/'.$order->id)}}" onclick="return confirm('Delete this item?');" class="btn btn-danger btn-xs">Delete</a></td>
            </tr></tbody>
            @endforeach
        </table>
        </div>
            <div class="d-flex justify-content-center">
                {{$orders->links("pagination::bootstrap-4")}}
            </div>
	</div>
</div>

@endsection 