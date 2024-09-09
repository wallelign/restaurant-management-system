@extends('home')

@section('content')
<div class="add">
<h3>Add menu</h3>
<div class="lin"><a href="items">Help(show menu if doen't know price)</a></div>
</div>
<div class="form4">
<div class="col-sm-4">
<form action="" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name of that you ordered">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Enter place you locate">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Enter phone">
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@stop
<style>
   h3{
    padding:20px;
    padding-left: 300px;
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;

}
    .form4{
         padding: 10px;
         padding-left: 300px;
         font-family: 'Times New Roman', Times, serif;
         font-size:20px;
    }
.add{
    padding-top: 50px;
}
.lin{
  padding-left:800px;
  background-color:black;
  color:white;
}
</style>