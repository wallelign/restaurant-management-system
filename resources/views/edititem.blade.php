

@extends('layout')

@section('content')
<div class="edititem">
<h3>Edit menu</h3>
<div class="form6">
<div class="col-sm-4">
<form action="/edit" method="post">
    @csrf
  <div class="form-group">
    <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="exampleInputEmail1">Amount&name of Item</label></p>
    <input type="text" name="nameofitem" value="{{$data['nameofitem']}}" placeholder="Enter name Items"></p>
    <label for="exampleInputEmail1">price</label></p>
    <input type="text" name="price" value="{{$data['price']}}"  placeholder="Enter there Price">
 </div>
 <div class="button">
  <button type="submit">Edit</button>
</div>
</form>
</div>
</div>
</div>
@stop
<style>
   h3{
    padding:20px;
    padding-left: 600px;
    padding-top: 50px;
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;
}
.form6{
    padding-left:500px;
    font-family: 'Times New Roman', Times, serif;
    font-size: 23px;
    border-color:red;
    border-radius:5px;
}
button{
    padding-left: 80px;
    padding-right: 80px;
    background-color: aqua;
    color: black;
    font-family: 'Times New Roman', Times, serif;

}
</style>