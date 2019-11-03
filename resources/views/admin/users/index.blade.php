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
            <li class="breadcrumb-item active">Users</li>
        </ol>

            <table class="table table-condensed">
                <thead><tr>
                <th>Name</th><th>NRC Number</th><th>Mobile Number</th><th>DOB</th><th>Last updated</th>
                </tr><thead>

                @foreach($users as $user)
                <tbody><tr><td>{{$user->fullName}}</td><td>{{$user->nrcNumber}}</td><td>{{$user->mobileNumber}}</td><td>{{$user->dateOfBirth}}</td><td>{{$user->updated_at}}</td>
                {{--<td>
                    <a href="{{url('/adminContentShow/'.$user->id)}}" class="btn btn-success btn-xs">View</a>
                    <a href="{{url('/adminContentDestroy/'.$user->id)}}" onclick="return confirm('Delete this post?');" class="btn btn-danger btn-xs">Delete</a>
                </td>--}}
                </tr></tbody>
                @endforeach
            </table>
        </div>
            <div class="d-flex justify-content-center">
                {{$users->links("pagination::bootstrap-4")}}
            </div>
	</div>
</div>

@endsection 