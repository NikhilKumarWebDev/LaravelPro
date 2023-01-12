@extends('layouts.app')
@section('content')
<div class="col-md-4 m-auto border mt-3 p-2 border-info">
    <h2 class="text-center text-warning">UPDATE VIEW</h2>
<form action="updateData" method="get">
<div class="mb-2">
        <label for="">Product Id</label>
        <input type="text" name="id" readonly value="{{$pid}}" class="form-control" id="">
    </div>
    <div class="mb-2">
        <label for="">Product Name</label>
        <input type="text" name="name" value="{{$pname}}" class="form-control" id="">
    </div>

    <div class="mb-2">
        <label for="">Product Price</label>
        <input type="text" name="price" value="{{$pprice}}" class="form-control" id="">
    </div>
    <br>
    <button type="submit" class=" btn btn-outline-warning rounded-pill ">Update</button>


</form>
</div>
@endsection