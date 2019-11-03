@extends('layouts.admin')

<Style>
        /* Make the image fully responsive */
        /*    .carousel-inner img {
                width: 100%;
                height: 100%;
            }*/
</Style>

@section('content')
        <div class="col-md-12">

                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                        <div class="card-header">
                                <i class="fas fa-chart-area"></i>
                                Traffic</div>
                        <div class="card-body">
                                <canvas id="myAreaChart" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

        </div>

@endsection