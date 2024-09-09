<script type="text/javascript" src="https://code.jquery.com/jquery 3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
integrity="sha256-VazP97ZCwtakAsvgPBSUwPBSUwPFKdrwD3unUfSGVYrahUqu="
crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css">
<!-- bootstrap CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@extends('layout')

@section('content')
<div class="edit">
<h3>Edit here</h3>
</div>
<div class="form5">
<div class="col-sm-4">
<form action="/edit" method="post">
    @csrf
  <div class="form-group">
      <input type="hidden" name="id" value="{{$data['id']}}">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data['name']}}" placeholder="enter name  ">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email"  value="{{$data['email']}}" placeholder="Enter email">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" value="{{$data['address']}}" placeholder="Enter address">
    <label for="exampleInputEmail1">phone</label>
    <input type="text" class="form-control" name="phone"  value="{{$data['phone']}}" placeholder="Enter phone">
 </div>
 <div class="bn">
  <button type="submit">Edit</button>
  </div>
</form>
</div>
</div>
@stop
<style>
  .edit{
    font-family: 'Times New Roman', Times, serif;
    padding-top:50px;
    padding-left: 100px;
  }
  .form5{
    font-family: 'Times New Roman', Times, serif;
    padding-left: 100px;
  }
  button{
    padding-left: 70px;
    padding-right: 70px;
    background-color: aqua;
    color: black;
    font-family: 'Times New Roman', Times, serif;
</style>
<script>
    $(document).ready(function(){
        $('button').click(function(){
            alert("all set");
        })
    })
</script>