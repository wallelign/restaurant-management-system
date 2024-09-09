@extends('layout')

@section('content')
<div class="regesteration">
<h3>Regestoration form</h3>
</div>
<div class="form3">
<div class="col-sm-4">
<form action="regestration" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name">
    <!-- <label for="exampleInputEmail1">age</label> 
    <input type="text" class="form-control" name="age" id="exampleInputEmail1" placeholder="Enter age"></p>
    <div class="gender">      
    <label for="gender">gender</label><br>
              <label for="gender_male" id="ma">male</label>
              <input type="radio" name="gender_choice" value="choice-1"><br>
              <label for="gender_female">female</label>
              <input type="radio" name="gender_choice" value="choice-2">
          </div></p>
    <label for="week">brithday</label>
    <input type="week"></p>       -->

    <label for="exampleInputEmail1">nationality</label>
    <input type="text" class="form-control" name="nationality" id="exampleInputEmail1" placeholder="Enter nationality"></p>
    <label for="exampleInputEmail1">city</label>
    <input type="text" class="form-control" name="city" id="exampleInputEmail1" placeholder="Enter city"></p>
    <label for="exampleInputEmail1">occupation</label>
    <input type="text" class="form-control" name="occupation" id="exampleInputEmail1" placeholder="Enter occupation">
</div>
  <button type="submit">Regester</button>
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
    .form3{
         padding: 10px;
         padding-left: 300px;
         font-family: 'Times New Roman', Times, serif;
         font-size:20px;
    }
    button{
    padding-left: 70px;
    padding-right: 70px;
    background-color: aqua;
    color: black;
    font-family: 'Times New Roman', Times, serif;

}
.regesteration{
    padding-top: 50px;
}
#male{
  padding-left: 20px;
}
</style>