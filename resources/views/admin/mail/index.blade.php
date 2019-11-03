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
            <li class="breadcrumb-item active">Mail</li>
        </ol>

            <table class="table table-condensed">
                <thead><tr>
                <th>user</th><th>Message</th><th>Created At</th><th>Actions</th>
                </tr><thead>

                @foreach($mails as $mail)
                <tbody><tr><td>{{$mail->subject}}</td><td>K{{$mail->message}}</td><td>{{$mail->created_at}}</td>
                <td><a href="{{url('/adminContentShow/'.$mail->id)}}" class="btn btn-success btn-xs">View</a>
                <a href="{{url('/adminContentDestroy/'.$mail->id)}}" onclick="return confirm('Delete this post?');" class="btn btn-danger btn-xs">Delete</a></td>
                </tr></tbody>
                @endforeach
            </table>
        </div>
            <div class="d-flex justify-content-center">
                {{$mails->links("pagination::bootstrap-4")}}
            </div>
	</div>
</div>

@endsection 