@extends('layout')

@section('content')
<!-- <div class="search">
<form action=""method="post">{
  <input type="text"name="search"placeholder="search here">
  <button type="submit">search</button>
</form>
</div> -->
@if(Session::get('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<!-- {{print($data)}} -->
<div class="ta">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">phone</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  @foreach($data as $item)
  <tbody>
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['name']}}</td>
      <td>{{$item['email']}}</td>
      <td>{{$item['address']}}</td>
      <td>{{$item['phone']}}</td>
      <td> <a href={{"delete/" .$item['id']}}>Delete</a></td>
       <td> <a href={{"edit/" .$item['id']}}>Edit</a></td>
    </tr>
  </tbody>
  @endforeach
  <h5>There is {{count($data)}} orders</h5>
</table>
</div>
@stop
<style>
  .ta{
    padding: 100px;
  }
</style>
