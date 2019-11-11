<?php
session_start();
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
        <nav class="navbar navbar-expand-md navbar-dark bg-info mb-4">
      <div class = "logo-wp">
          <a href="/ECT/index.php" class="navbar-brand logo"><img class="logo-image" src="/ECT/images/ect_pc_logo1.png"></a> 
                  <!--<img src="/images/ect_pc_logo" class="img-fluid"> -->   
          <b class="navbar-brand" href="#"> Wedding Planning</b>
        </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/ECT/index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/about.php">About Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/ECT/store.php">Store</a>
      </li>
	  <?php if (isset($_SESSION['email'])) : ?>
        <li class="nav-item">
        <a class="nav-link" href="/ECT/memberHome.php">Member Home</a>
        </li>
		<?php endif; ?>
	  <li class="nav-item">
        <a class="nav-link" href="/ECT/contactusview.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ECT/signup.php">Sign Up</a>
      </li>
      </li>
      <?php if (!isset($_SESSION['email'])) : ?>
        <li class="nav-item">
        <a class="nav-link" href="/ECT/login.php">Log In</a>
        </li>
		<?php else : ?>
		<li class="nav-item">
        <a class="nav-link" href="/ECT/login.php">Log Out</a>
        </li>
		<?php endif; ?>
      </li>
      
      
    </ul>

  </div>
</nav>

  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column bd-placeholder-img">
  <header class="masthead mb-auto">
    <div class="inner">
      <h4 class="masthead-brand">The Persistent Cookies</h4>
<br>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">PC Wedding Planning</h1>
      <h4>Your One-Stop Wedding Shop</h4>
    <p class="lead">We're a small business that plans weddings in Charlottesville, Virginia. We're dedicated to serving all your wedding planning needs.</p>
  </main>
<br><br>




<div class="pink mr-md-3 pt-3 w-100 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="hwedding"></div>
    <div class="my-3 p-3">
      <h2 class="display-5">Wedding Planning</h2>
      <p class="lead">Location, decoration, invitation, celebration! We can help you with everything down to the icing on the cake.</p>
    </div>

  </div>
<br><br>
  <div class="dimgray mr-md-3 w-100 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="hbouquet"></div>
    <div class="my-3 py-3">
      <h2 class="display-5">Specialty Weddings</h2>
      <p class="lead">Looking for something elegant? Unique? Spunky? Non-traditional? We are the team for you! </p>
    </div>

  </div>
<br><br><br>
<div class=" flex-md-equal d-md-flex my-md-3 pl-md-3">
      <div class="mr-md-3 w-50">
        <h2>Shop for Packages</h2>
        <p>Find the right wedding planning package <br> for your big day here!</p>
        <p><a class="btn btn-info" href="/ECT/store.php" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="mr-md-3 w-50">
        <h2>Who Are We?</h2>
        <p>Learn more about the Persistent Cookies <br> wedding planning here!</p>
        <p><a class="btn btn-info" href="/ECT/about.php" role="button">About us &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <!-- <div class="col-lg-4">
        <h2>Shop for Bouquets</h2>
        <p>Trying to impress that special someone in a unique way? Shop for specialty bouquets here!</p>
        <p><a class="btn btn-info" href="#" role="button">View details &raquo;</a></p>
      </div>/.col-lg-4 -->
    </div><!-- /.row -->



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
