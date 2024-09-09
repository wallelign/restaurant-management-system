@extends('layout')

@section('content')
<!-- @if(Session::get('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif -->
<div class="itemtable">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name Of Items</th>
      <th scope="col">Price</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  @foreach($data as $item)
  <tbody>
    <tr>
      <td>{{$item['id']}}</td>
      <td>{{$item['nameofitem']}}</td>
      <td>{{$item['price']}}</td>
      <td> <a href={{"deletee/" .$item['id']}}>Delete</a></td>
       <td> <a href={{"editt/" .$item['id']}}>Edit</a></td>
    </tr>
  </tbody>
  @endforeach
  <h5>There is {{count($data)}} items regesterd</h5>
</table>
</div>
@stop
<style>
  .itemtable{
    padding: 100px;
  }
</style>
