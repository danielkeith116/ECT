<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/ECT/css/customsignup.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <title>Contact Us</title>
    <style>
        b{
          font-family: 'Dancing Script';
          color: black !important;
        }
        h1{
          font-family: 'Lobster';
          color: rgb(23, 162, 184);
        }
      </style>
    <body>
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
      <li class="nav-item">
        <a class="nav-link" href="/ECT/index.php">Home</a>
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
	  <li class="nav-item active">
        <a class="nav-link" href="/ECT/contactusview.php">Contact Us<span class="sr-only">(current)</span></a>
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

  <form class="form-contactus" action="contactus.php" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Contact Us!</h1>
  </div>

  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputName">Name</label>
      <input type="name" name="inputName" id="inputName" class="form-control" placeholder="Name" pattern="[A-Za-z '\-]*" title="Please enter only letters, spaces, dashes, or apostrophes" required autofocus>
    </div>
  </div>

  <br>

  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputEmail">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    </div>
  </div>

  <br>

  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputMessage">Message</label>
      <input type="Message" name = "message" id="inputMessage" class="form-control" placeholder="Message" required autofocus>
    </div>
  </div>


  <br>

  <div class="d-flex justify-content-center">
    <button class="btn btn-lg btn-info btn-block w-25" type="submit">Submit</button>
  </div>


</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




