<?php
session_start();
if (!isset($_SESSION['email']))
{	
	header('Location: /ECT/login.php');
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/ECT/css/customsignup.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/product.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/ECT/css/customstore.css">
    <title>Shop Now</title>
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
      background-color: rgba(23, 162, 184, 0.5)
      }

      h1, h2, h4, u{
      font-family: 'Lobster';
    
      }
      b{
        font-family: 'Dancing Script';
        color: black !important;
      }

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
	  <li class="nav-item active">
        <a class="nav-link" href="/ECT/store.php">Store<span class="sr-only">(current)</span></a>
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

    <div class=" text-center">
          <h1 class="display-4 font-weight-normal" style="color: rgba(205, 92, 92, 0.5)">Purchase One of Our Wedding Planning Packages</h1>
    </div>
  
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
        <div class="turq mr-md-3 w-33 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">1: All In</h2>
            <p class="lead">Our full planning package, all the way from “I’m down” to “I do!” Includes venue, decorations, invitations, rentals, catering, cake, flowers, and anything else you might need to make your day special.</p>
            <br>
            
          </div>
      
        </div>
        <div class="bg-light mr-md-3 pt-3 w-33 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 p-3">
            <h2 class="display-5">2. Halfway There</h2>
            <p class="lead">Our partial package, perfect if you want to make the big decisions yourself but need someone to wrestle the devil in the details and the logistics.</p>
            
          </div>
        </div>
        <div class="turq mr-md-3 w-33 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
          <div class="my-3 py-3">
            <h2 class="display-5">3. Eleventh Hour</h2>
            <p class="lead">Our day-of, down-to-business package for when you’ve done the bulk of the prep yourself but want someone around to take care of all the things necessary for the big day itself.</p>
            <br>
            
          </div>
      
        </div>
      </div>
      <div class="dimgray d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="my-3 p-3">
            <h2 class="display-5">Shop for one of our standard packages:</h2>
            <!-- <p class="lead">Do you get excited about the idea of a Chi Alpha wedding? Do you know what that means at all? If you want your real community around you while you promise your real responsibility to your significant other, we can make that happen! We’ll work with staff to invite all your past core group members, rent out McCleod, and even book Pete to officiate! </p> -->
          <a href="/ECT/checkoutview.php">   
            <u><h3 class="link">Select Package >></h3></u>
           </a>
      </div>
    </div>
      <div class="xa d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="my-3 p-3">
            <h2 class="display-5">Bonus Package: the Chi Alpha Wedding Package</h2>
            <p class="lead">Do you get excited about the idea of a Chi Alpha wedding? Do you know what that means at all? If you want your real community around you while you promise your real responsibility to your significant other, we can make that happen! We’ll work with staff to invite all your past core group members, rent out McCleod, and even book Pete to officiate! </p>
          <a href="/ECT/XAview.php">   
            <u><h3 class="link">Select Package >></h3></u>
           </a>
		  </div>
		  
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




