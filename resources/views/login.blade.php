@extends('home')

@section('content')
<div class="login">
<h3>login form</h3>
</div>
<div class="form2">
<div class="col-sm-4">
<form action="/login" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name">
    <label for="exampleInputEmail1">password</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="Enter password">
 </div>
  <button type="submit">login</button><br>
  <lable class="create"> create new account?</lable>
  <a href="regestration">create account</a>
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
    .form2{
         padding: 10px;
         padding-left: 300px;
    }
    button{
    padding-left: 70px;
    padding-right: 70px;
    background-color: aqua;
    color: black;
    font-family: 'Times New Roman', Times, serif;

}
.login{
    padding-top: 100px;
}
</style>