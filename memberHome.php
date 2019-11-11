<?php
session_start();
if (!isset($_SESSION['email']))
{	
	header('Location: /ECT/login.php');
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&subset=latin,latin-ext" rel="stylesheet"
        type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <title>Member Page</title>
    <style>
        b {
            font-family: 'Dancing Script';
            color: black !important;
        }
        h1 {
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
        <li class="nav-item active">
        <a class="nav-link" href="/ECT/memberHome.php">Member Home<span class="sr-only">(current)</span></a>
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
    <div class="text-center flex justify-content-center w-75 ">
        <h1>See our most recent wedding's blog post!</h1>
        <p>It was such a joy to be a part of Charlotte and Clay's speical day as they are dear friends of ours.
            They met each other on a mission trip in Turkey, and will return to be missionaires there for the next few
            years!
            <br>
            Their wedding was spectacular, taking place at the Historical PoleGreen Church just outside of Richmond.
            Their color scheme of pastel blue and sage green was fitting for the perfect spring day on May 25, 2019.
            The two exchanged vows, and enjoyed a lovely reception with friends and family at their church enjoying a
            breakfast buffet for the morning wedding.
            <br>
            We loved working with Charlotte and Clay to make their wedding as unique as they are.
            <br>
            -The Persistent Cookies
        </p>
        <section class="cid-qvbazpicKQ" id="image4-7l" data-rv-view="4322">
            <!-- Block parameters controls (Blue "Gear" panel) -->

            <!-- End block parameters -->
            <div class="container images-container">
                <div class="media-container-row" style="width: 80%;">
                    <div class="img-item item1" style="width: 123%;">
                        <img src="/ECT/images/members/4.jpg" alt="" style="width:500px;height:600px;" title=""
                            media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The Bride's Beautiful Dress
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/5.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The Invites, Rings & Bride's Shoes
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/7.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The Rings
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/21.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                Groom Getting Ready
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/43.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                Beautiful Bouquets
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/44.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The Bridesmaids
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/46.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The Bridesmaids
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/78.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The Newly Weds!
                            </h4>
                        </div>
                    </div>
                    <div class="img-item">
                        <img src="/ECT/images/members/54.jpg" style="width:500px;" alt="" title="" media-simple="true">
                        <div class="img-caption">
                            <h4 class="mbr-fonts-style align-center mbr-black display-7">
                                The First Dance
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>

