<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="/ECT/css/customabout.css">


    <title>About Us</title>
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
      background-color: rgba(0, 206, 209, 0.5)
      }

      h1, h2, h4{
      font-family: 'Lobster';
    
      }
      b{
        font-family: 'Dancing Script';
        color: black !important;
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/product.css" rel="stylesheet">
  </head>
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
      <li class="nav-item active">
        <a class="nav-link" href="/ECT/about.php">About Us<span class="sr-only">(current)</span></a>
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


  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">PC Wedding Planning</h1>
    <!--<h4 class="display-4 font-weight-normal">Your One-Stop Wedding Shop</h4>-->
    <a class="btn btn-outline-secondary" href="/ECT/store.php">Shop Now</a>
  </div>
    <div class="pic1 text-center"></div>
    <br>
    <!--<p class="lead font-weight-normal">Who Are We? <br> A group of college students dedicated to making your day a little
      brighter, your life a little easier, and your smile a little wider!</p>-->
    <div class="bg-light mr-md-3 w-100 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">Who Are We?</h2>
      <p class="lead">Hello world! This is (from left to right) Caroline Ehler, Elizabeth Shelton, and Daniel Keith here;
        we are all 3rd year Computer Science majors at the University of Virginia. We first met in Chi Alpha Christian
        Fellowship and soon discovered we shared a love for software development alongside our shared love for
        Jesus. In short, we are dedicated to making your day a little brighter, your life a little easier, and your
        smile a little wider through this website!</p>
    </div>

  </div>
  <div class="product-device shadow-sm d-none d-md-block"></div>

  <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>

</div>



  <div class="dimgray mr-md-3 w-100 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">What are we doing?</h2>
      <p class="lead">We’re planning your wedding! We’ll take care of anything you’d like, from day one to the day of,
        and leave what you’re passionate about in your equally capable hands! </p>
    </div>

  </div>
  <!-- <div class="turq mr-md-3 pt-3 w-50 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 p-3">
      <h2 class="display-5">Wait, what are specialty bouquets?</h2>
      <p class="lead">Glad you asked! Have you ever seen a meme of someone getting a bunch of rose-shaped bacon treats and wished you were that creative in your gift-giving? Well, now you can be! We do bacon, nuggets, chocolate, special request… oh, and cookies, of course!</p>
    </div>
      <p class="lead">Glad you asked! You ever see a meme of someone getting a bunch of rose-shaped bacon treats and wished you were that creative in your gift-giving? Well, now you can be! We do bacon, nuggets, chocolate, special request… oh, and cookies, of course!</p>
    </div> -->

  </div>
</div>

<div class="pink d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="my-3 p-3">
      <h2 class="display-5">Do I have options for my wedding planning?</h2>
      <p class="lead">Absolutely! We have three major planning packages: </p>
    </div>
</div>



<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
  <div class="turq mr-md-3 w-33 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
    <div class="my-3 py-3">
      <h2 class="display-5">1: All In</h2>
      <p class="lead">Our full planning package, all the way from “I’m down” to “I do!” Includes venue, decorations, invitations, rentals, catering, cake, flowers, and anything else you might need to make your day special.</p>
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
    </div>

  </div>
</div>

<div class="xa d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
    <div class="my-3 p-3">
      <h2 class="display-5">Bonus Package: the Chi Alpha Wedding Package</h2>
      <p class="lead">Do you get excited about the idea of a Chi Alpha wedding? Do you know what that means at all? If you want your real community around you while you promise your real responsibility to your significant other, we can make that happen! We’ll work with staff to invite all your past core group members, rent out McCleod, and even book Pete to officiate! </p>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




