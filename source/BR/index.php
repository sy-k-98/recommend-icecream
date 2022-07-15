<?php
include './login_info.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>배스킨라빈스31</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <style>
  .navbar .nav li.active a {
    background: #de5ba7
  }

  .navbar .nav li.active a:hover {
    background: #de5ba7
  }

  .navbar .nav li.dropdown a:hover {
    background-color:#0360B0;
  }

  .rheading .span100 {
            background-color: #de5ba7;
            position: absolute;
            width: 100%;
            height: 1px;
            bottom: -1px;
            left: 0;
            margin-left: 0;
        }
  </style>
</head>
<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="index.html"><img src="assets/img/logo.png" width="250" alt="" /></a>
            </div>
            <!-- end logo -->
            
            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li class="active">
                    <a href="index.html" style="padding-right: 10px""><i class="icon-home"></i> Home </a>
                  </li>
                  <li class="dropdown">
                    <a href="PickYourFlavor.php" style="padding-right: 10px"><i class="icon-check"></i> Pick Your Flavor </i></a>
                  <li class="dropdown">
                    <a href="Reviews.php" style="padding-right: 10px"><i class="icon-book"></i> Reviews </i></a>
                  </li>
                  <li class="dropdown">
                    <a href="MyOrders.php" style="padding-right: 10px"><i class="icon-tag"></i> My Orders </i></a>
                  </li>
                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>
    <section id="maincontent">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h4 class="rheading"> 배스킨라빈스31 <span class="span100"></span></h4>
                        <div style="text-align:center;" >
                          <img src="assets/img/main.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/raphael-min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery-hover-effect.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>