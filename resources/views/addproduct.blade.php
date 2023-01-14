@extends('layouts.app')
@section('content')

<center>
 <h1 class= "text-center text-danger mt-5">CRUD OPERATION</h1>
  <!-- Button trigger modal -->
 <button type="button" class="btn btn-outline-danger fw-bold fs-5 rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Record
  </button>

 <!-- Modal -->
 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">CRUD OPERATION</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('home.add')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="mb-2">
            <input type="text" placeholder="Enter the product name" class="form-control" name="pname" id="" >
          </div>
          <div class="mb-2">
            <input type="text" placeholder="Enter the product price" class="form-control" name="pprice" id="" >
          </div>
          <div class="mb-2">
            <input type="file" class="form-control" name="pimage" id="" >
          </div>
          <button type="submit" class="btn btn-outline-primary fw-bold fs-5 rounded-pill" >Add Record</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
      
    </div>
  </div>
  </div>
 </center>
 <div class="container">
  <table class="table mt-5">
   <thead class="bg-danger text-white fw-bold">
    <th>id</th>
    <th>Product Name</th>
    <th>Product Price</th>
    <th>Product Image</th>
    <th>Update</th>
    <th>Delete</th>
   </thead>
  <tbody class="text-danger bg-light fs-3">
  @foreach($data as $item)
  <tr>
    <form action="updatedelete" method="get">
 <td><input type="hidden" name="id" value="{{$item['id']}}">{{$item['id']}}</td>
 <td><input type="hidden" name="name" value="{{$item['pname']}}">{{$item['pname']}}</td>
 <td><input type="hidden" name="price" value="{{$item['pprice']}}">{{$item['pprice']}}</td>
 <td><img src="images/{{$item['pimage']}}" width="100px",height="100px"></td>
 <td><input type="submit" class="btn btn-outline-danger rounded-pill" name="update" value="Update"></td>
 <td><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete"></td>
    </form>
  </tr>
  @endforeach
 </tbody>

 </table>
 </div>
 @endsection
 