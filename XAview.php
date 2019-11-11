<?php
start_session();
if (!isset($_SESSION['email']))
{
	header('Location: /ECT/login.php');
}
?>
<!doctype html>
<html lang="en">
  <!-- name, wedding date, wedding venue, pinterest board link, message -->
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/ECT/css/custommoran.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <title>XA Wedding</title>
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
      <li class="nav-item ">
        <a class="nav-link" href="/ECT/signup.php">Sign Up</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ECT/login.php">Log In</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/ECT/contactusview.php">Contact Us</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="/ECT/store.php">Store</a>
      </li>
    </ul>

  </div>
  </nav>
<form class="form-signup" action="xa.php" method="post">
  <div class="text-center mb-4">
    <img clas s="mb-4" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Chi Alpha Wedding</h1>
  </div>
  
  <div class="text-center mb-4">
        <h5 class="warning">This package includes everything from the full planning package, but we've already got you started with some suggestions for venue and officiator. Getting your Real Community involved in your wedding is our Real Responsibility!</h5>
  </div>

  <!-- name, wedding date, wedding venue, pinterest board link, message -->
  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputName">Name*</label>
      <input type="text" name="fName" id="inputFirstName" class="form-control" placeholder="First Name" pattern="[A-Za-z]*" title="Please enter only letters" required autofocus>
        <br>
      <input type="text" name="lName" id="inputLastName" class="form-control" placeholder="Last Name" pattern="[A-Za-z]*" title="Please enter only letters" required autofocus>
    </div>
  </div>
    <br>

  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputEmail">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="Please enter a valid email address with an @ and ." required autofocus>
    </div>
  </div>
        <br>
  <div class="form-group d-flex justify-content-center">
        <div class="col-xs-2 w-50">
          <label for="month">Wedding Date</label>
          <select class="form-control" name="month" id="month" required autofocus>
              <option value="" selected disabled>Month*</option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
            <br>
            <select class="form-control" name="day" id="dayD" required autofocus>
             <script>
                var options = "";
                options += "<option value=\"\" selected disabled>Day*</option>"
				options += "<option value=\"0\">Unknown</option>";
                for (var day = 1; day <= 31; day++)
                  options += "<option>" + day + "</option>";
                document.getElementById("dayD").innerHTML = options;
      
              </script>
            </select>
            <br>
            <select class="form-control" name="year" id="yearD" required autofocus>
              <script>
                var start = 2019;
                var end = new Date().getFullYear() + 1;
                var options = "";
                options += "<option value=\"\" selected disabled>Year*</option>"
                for (var year = start; year <= end; year++)
                  options += "<option>" + year + "</option>";
                document.getElementById("yearD").innerHTML = options;
      
              </script>
            </select> 
            </div>
</div>


  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputVenue">Wedding Venue
      <select class="form-control" name="venue" id="venue" autofocus>
	  <option value="" selected disabled>Venue</option>
              <option>McCleod</option>
              <option>City Church</option>
              <option>City Church Central</option>
			  <option>UBC</option>
              <option>Other (specify in message)</option>
	  
            </select>
    </div>
  </div>
  <br>

  <div class="form-label-group d-flex justify-content-center">
      <div class="col-xs-2 w-50">
        <label for="inputPinterest">Officiator
        </label>
      <select class="form-control" name="link" id="inputPinterest" autofocus>
              <option value="" selected disabled>Officiator</option>
              <option>Pete Bullette</option>
              <option>Josh Moran</option>
              <option>Sarah Fletcher</option>
			  <option disabled>Christopher Cole (coming soon!)</option>
              <option>Other (specify in message)</option>
            </select>
	  </div>
    </div>
    <br>

  <div class="form-label-group d-flex justify-content-center">
      <div class="col-xs-2 w-50">
        <label for="inputMessage">Message</label>
        <input type="Message" name = "message" id="inputMessage" class="form-control" placeholder="Bible verses from your Real Devotional Life to include in the sermon, other notes" autofocus>
      </div>
    </div>
      <br>

  <div class="d-flex justify-content-center">
    <input class="btn btn-lg btn-info btn-block w-25" type="submit">
  </div>
    <br>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




