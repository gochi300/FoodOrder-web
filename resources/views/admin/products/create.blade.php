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
        <div class="col-md-8 col-md-offset-2">

        <h3>Add Product</h3><hr>
       

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

                <form action="{{url('/product-store')}}" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}

                <input type="hidden" name="user_id" value="">


                    <div class="form-group">
                        <label for="name">Product Name:</label><br>
                        <input class="form-control" type="text" name="productName" maxlength="40">
                    </div>

                    <div class="form-group">
                        <label for="name">Product Price:</label><br>
                        <input class="form-control" type="number" name="productPrice" maxlength="10">
                    </div>

                    <div class="form-group">
                        <label for="">Product Image:</label>
                        <input type="file" class="form-control-file" name="productImage" id="" placeholder=""
                               aria-describedby="fileHelpId" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Product Category:</label><br>
                        <select class="form-control" name="productCategory" id="">
                            <option value="food">Food</option>
                            <option value="drinks">Drinks</option>
                        </select>
                    </div>
                    <hr>

                <button class="btn btn-dark pull-right">
                Submit
                </button>
                    

                </form>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection 