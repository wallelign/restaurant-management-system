<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Restorant App</title>
    <!-- jquery CDN -->
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
</head>
<!-- <header>navigation bar will be here</header> -->
<div class="navigation">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/upload">Resesto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/list">List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/regestform">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">search</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="regestration">Regester</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="regestration">Regester</a>
      </li>
      <div class="regsteritem">
      <li class="nav-item">
        <a class="nav-link " href="item">Regester Items&Their Price</a>
      </li>
    </div>
      <div class="good">
        <li class="nav-item">
        <a class="nav-link " href="items">Check Items&Price In Our Resto</a>
      </li>
    </div>
    </ul>
  </div>
</nav>
</div>
<body>
  <h2>well come to restorant </h2>
    <div>
        @yield('content')
       <h3> regestration link will be here</h3>
    </div>
    <h3>well come to restorant home page</h3>
<footer> copy right by restorant App</footer>
</body>
</html>
<style>
  .navigation{
    position: fixed;
    background-color:black;
    color: black;
  }
  .good{
    padding-left: 490px;
  }
  .regsteritem{
    padding-left:20px;
  }
</style>
