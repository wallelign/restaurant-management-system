@extends('layout')
@section('content')
<h5>if you uploade file click below two button frist choose and then upload button </h5>
<div class="uploadform">
<form action="upload" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="file"><br><br>
<button type="submit"> Upload file</button>
</form>
</div>
@stop
<style>
    h5{
        padding:50px;
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
        font-style: italic;
    }
    .uploadform{
        padding-left: 40px;
        padding-top: 5px;
    }
</style>