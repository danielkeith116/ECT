﻿<?php
session_start();
if (isset($_SESSION['email']))
{
	header('Location: /ECT/memberHome.php');
}
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
    <title>Sign Up</title>
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
	  <li class="nav-item">
        <a class="nav-link" href="/ECT/contactusview.php">Contact Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/ECT/signup.php">Sign Up<span class="sr-only">(current)</span></a>
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
<form class="form-signup" action="verifysignup.php" method="post">
  <div class="text-center mb-4">
    <img clas s="mb-4" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
    <h5 class="warning">US Residents Only</h5>
  </div>

  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputName">Name</label>
      <input type="text" name="fName" id="inputFirstName" class="form-control" placeholder="First Name" pattern="[A-Za-z '\-]*" title="Please enter only letters, spaces, dashes, or apostrophes" required autofocus>
        <br>
      <input type="text" name="lName" id="inputLastName" class="form-control" placeholder="Last Name" pattern="[A-Za-z '\-]*" title="Please enter only letters, spaces, dashes, or apostrophes" required autofocus>
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
  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputPassword">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autofocus>
    </div>
  </div>
  <br>

  <div class="form-label-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="inputAddress">Address</label>
        <input type="text" name="address" id="inputAddress" class="form-control" placeholder="Street Address" pattern="\d* [A-Za-z\-' ]*\.?" title="Please enter a valid street address" required autofocus>
        <br>

        <input type="text" name="city" id="inputCity" class="form-control" placeholder="City" pattern="[A-Za-z \-']*" title="Please enter only letters, spaces, dashes, or apostrophes" required autofocus>
        <br>

        <!--Source for list of states: https://www.freeformatter.com/usa-state-list-html-select.html-->
        <select class="form-control" name="state" id="state" required autofocus>
        <option value="" selected disabled>State</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
        <option value="GU">Guam</option>
        <option value="PR">Puerto Rico</option>
        <option value="VI">US Virgin Islands</option>
      </select>
        <br>
        <input type="number" name="zipcode" id="inputZipcode" class="form-control" placeholder="Zip Code" type="tel" pattern="(\d{5}([\-]\d{4})?)" title="US 5-Digit Postal Code required" min="00501" max="99950" required autofocus>
    </div>
  </div>
  <br>

  <div class="form-group d-flex justify-content-center">
    <div class="col-xs-2 w-50">
      <label for="month">Birthday:</label>
      <select class="form-control" name="month" id="month" required autofocus>
        <option value="" selected disabled>Month</option>
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
      <select class="form-control" name="day" id="day" required autofocus>
       <script>
          var options = "";
          options += "<option value=\"\" selected disabled>Day</option>"
          for (var day = 1; day <= 31; day++)
            options += "<option>" + day + "</option>";
          document.getElementById("day").innerHTML = options;

        </script>
      </select>
      <br>
      <select class="form-control" name="year" id="year" required autofocus>
        <script>
          var start = 1900;
          var end = new Date().getFullYear() - 18;
          var options = "";
          options += "<option value=\"\" selected disabled>Year</option>"
          for (var year = start; year <= end; year++)
            options += "<option>" + year + "</option>";
          document.getElementById("year").innerHTML = options;

        </script>
      </select>
    </div>
      <br>

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




