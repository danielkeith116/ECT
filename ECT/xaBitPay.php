<?php
session_start();
if (!isset($_SESSION['email']))
{
	header('Location: /ECT/login.php');
}
elseif (!isset($_SESSION['checkout']))
{
	header('Location: /ECT/store.php');
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
    <title>PC Wedding Planning</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/cover/">
    
    <link rel="stylesheet" type="text/css" href="/ECT/css/custom.css">
    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet" type="text/css">
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
.pink{
      background-color: rgba(255, 182, 193, .5)
      }

      .dimgray{
      background-color: rgba(105, 105, 105, 0.5)
      }

      .xa {
      background-color: rgba(205, 92, 92, 0.5)
      }

      .turq {
      background-color: rgba(0, 206, 209, 0.5)
      }

      h1, h2, h4{
      font-family: 'Lobster';
      }

      }
      b{
        font-family: 'Dancing Script';
        color: black !important;
      }
    </style>
    <!-- Custom styles for this template -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/cover.css" type="text/css" rel="stylesheet">
  </head>
  <body class="text-center">
   <!--<nav class="navbar navbar-expand-md navbar-dark bg-info mb-4">
    <div class = "logo-wp">
      <a href="/ECT/index.html" class="navbar-brand logo"><img class="logo-image" src="/ECT/images/ect_pc_logo1.png"></a> 
           
      <b class="navbar-brand" href="#"> Wedding Planning</b>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ECT/index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/about.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/signup.html">Sign Up</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/login.html">Log In</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/contactus.html">Contact Us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/store.html">Store</a>
      </li>
    </ul>
  </div>
</nav>-->

<h2>Congratulations, you have made a purchase!</h2>
<form action="https://test.bitpay.com/checkout" method="post">
  <input type="hidden" name="action" value="checkout" />
  <input type="hidden" name="posData" value="" />
  <input type="hidden" name="data" value="LcMQ+N889ZKtLL7wQHdhcEmW5naVjm0O2/Vh42oO0xWDXgGe2C6yjQLbBLFC5VBmHYXqxqYmBQzbb2zrBBQaCJuXvDQaCNQ/9xca7Uxq72u2NUbbU5hWzH5uIqTDxpf12M5ky5ZHUpDho3Irghr5TSMw4KN3Xiq9epaE1HuxmOsL8tj1ZZ6U/zW20aEYv5D9cW6ats3p5MkukvCw2wIb7A==" />
  <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
</form>


</body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
