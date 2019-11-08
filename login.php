<?php
session_start();
if (isset($_SESSION['email']))
{
	header('Location: /ECT/memberHome.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Log In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/ECT/css/customsignup.css">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      h1{
        font-family: 'Lobster';
        color: rgb(23, 162, 184);
      }
      b{
        font-family: 'Dancing Script';
          color: black !important;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-info mb-4">
        <div class = "logo-wp">
            <a href="/ECT/index.html" class="navbar-brand logo"><img class="logo-image" src="/ECT/images/ect_pc_logo1.png"></a> 
                    <!--<img src="/images/ect_pc_logo" class="img-fluid"> -->   
            <b class="navbar-brand" href="#"> Wedding Planning</b>
          </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/ECT/index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/about.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/signup.php">Sign Up</a>
      </li>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/ECT/login.php">Log In<span class="sr-only">(current)</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/contactus.html">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/store.php">Store</a>
      </li>
    </ul>

  </div>
</nav>
    
  <div class="text-center mb-4">
    <img class="mb-4" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Log In</h1>
  </div>
<form class="form-signin" action="verifylogin.php" method="post">
  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="email">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    </div>
  </div>
        <br>
  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    </div>
  </div>
  <br>

  <div class="d-flex justify-content-center">
    <input class="btn btn-lg btn-info btn-block w-25" type="submit" value="Sign In">
  </div>
  


</form>
<br>
<hr>
<div class="d-flex justify-content-center">
<p>Don't have an account?</p>
</div>
<div class="d-flex justify-content-center">
<p><a class="btn btn-info" href="/ECT/signup.php" role="button">Register Now</a></p>
</div>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
