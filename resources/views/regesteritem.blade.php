@extends('layout')

@section('content')
<div class="regesteritem">
<h3>Regster item here</h3>
<div class="form5">
<div class="col-sm-4">
<form action="" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Amounts&name of Item</label>
    <input type="text" class="form-control" name="nameofitem" placeholder="Enter Amount and name of items">
    <label for="exampleInputEmail1">price</label>
    <input type="text" class="form-control" name="price"  placeholder="Enter there Price">
 </div>
  <button type="submit" class="btn btn-primary">regester</button>
</form>
</div>
</div>
</div>
@stop
<style>
   h3{
    padding:20px;
    padding-left: 300px;
    padding-top: 50px;
    font-style: italic;
    font-style: bold;
    font-family: 'Times New Roman', Times, serif;

}
.regesteritem{
  font-size:25px;
  font-family: 'Times New Roman', Times, serif;
  padding-left:50px;
}
</style>