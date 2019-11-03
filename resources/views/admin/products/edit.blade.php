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
        <div class="panel-body" style="padding: 50px;">
        <div class="col-md-8 col-md-offset-2">

        <h3>Edit Post</h3><hr>
       

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    
                    <strong>oops!</strong> There was something wrong with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
                @endif

                <form action="{{url('/admin-adminContentUpdate/'.$post->id)}}" method="PUT">

                {{ method_field('PUT')}}

                {{ csrf_field() }}

                {{--<input type="hidden" name"user_id" value="{{ Sentinel::getUser()->id }}">--}}


                    <div class="form-group">
                        <label for="name">Name:</label><br>
                        <input class="form-control" type="text" name="name" value="{{ $post->name }}" maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="address">Description:</label><br>
                        <textarea class="form-control" type="text" name="address" maxlength="150">{{ $post->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="tags" value="@foreach($post->tags as $tag ){{$tag->tag}}, @endforeach" maxlength="30">
                    </div>
                    <br>
                    <br>
                <button class="btn btn-dark pull-right">Submit</button>
                    

                </form>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection 