<?php
include './dbcon.php';

session_start();
?>
<div style="margin: 10px; float: right;">
  <h1 style="font-size: 13px; display : inline;">
    <?php
    if (isset($_SESSION['User_ID'])) {
      echo $_SESSION['User_ID'];
      ?>님 안녕하세요.</h1>

    <button <button type="submit" class="btn btn-warning" onclick="location.href='logout.php'">로그아웃<i class="fa fa-check spaceLeft"></i></button>
  </div>

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
      span {
        font-size: 14px !important;
      }

      .navbar .nav li.active a {
        background: #de5ba7
      }

      .navbar .nav li.active a:hover {
        background: #de5ba7
      }

      .navbar .nav li.dropdown a:hover {
        background-color: #0360B0;
      }

      .btn-theme {
        background-color: #0360B0;
      }

      .btn-theme:hover {
        background-color: #de5ba7;
      }

      [class^="icon-"].active,
      [class*=" icon-"].active {
        background-color: #0360B0;
      }

      [class^="icon-"].active:hover,
      [class*=" icon-"].active:hover {
        background-color: #de5ba7;
      }

      .rheading .span1 {
        background-color: #de5ba7;
        position: absolute;
        width: 33.3%;
        height: 1px;
        bottom: -1px;
        left: 0;
        margin-left: 0;
      }

      .rheading .span2 {
        background-color: #de5ba7;
        position: absolute;
        width: 33.3%;
        height: 1px;
        bottom: -1px;
        left: 33.3%;
        margin-left: 0;
      }

      .rheading .span3 {
        background-color: #de5ba7;
        position: absolute;
        width: 33.3%;
        height: 1px;
        bottom: -1px;
        left: 66.6%;
        margin-left: 0;
      }

      .row {
        margin-bottom: 100px;
      }

      p {
        font-size: 12px;
      }

      .navbar .nav li.active a {
        background: #de5ba7
      }

      .navbar .nav li.active a:hover {
        background: #de5ba7
      }

      .navbar .nav li.dropdown a:hover {
        background-color: #0360B0;
      }

      .btn-theme {
        background-color: #0360B0;
      }

      .btn-theme:hover {
        background-color: #de5ba7;
      }

      [class^="icon-"].active,
      [class*=" icon-"].active {
        background-color: #0360B0;
      }

      [class^="icon-"].active:hover,
      [class*=" icon-"].active:hover {
        background-color: #de5ba7;
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

      .row {
        margin-bottom: 80px;
      }
      .thumbnails {
        display: table !important;
        margin-left: auto !important;
        margin-right: auto !important;
      }

      .power {
        width: 135px !important;
      }

      .thumbnails>li {
        margin-left: 10px !important;
        margin-right: 10px !important;
      }

      .thumbnail {
        width: 135px !important;
        height: 360px !important;
      }

      .h135 {
        min-height: 150px;
      }

      h5 {
        height: 27px !important;
        white-space: nowrap;
        font-size: 14px;
        text-align: center;
      }

      .pbc {
        background-color: #de5ba7 !important;
        background-image: none;
      }

      .pbc:hover {
        background-color: #0360B0 !important;
        background-image: none;
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
                    <li class="dropdown">
                      <a href="index.html" style="padding-right: 10px""><i class=" icon-home"></i> Home </a>
                    </li>
                    <li class="active">
                      <a href="PickYourFlavor.php" style="padding-right: 10px"><i class="icon-ok"></i> Pick Your
                        Flavor </i></a>
                    <li class="dropdown">
                      <a href="Reviews.php" style="padding-right: 10px"><i class="icon-pencil"></i> Reviews </i></a>
                    </li>
                    <li class="dropdown">
                      <a href="MyOrders.php" style="padding-right: 10px"><i class="icon-shopping-cart"></i> My Orders </i></a>
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
        <form action='submit.php' method='post'>
          <div class="container">
            <div class="row">
              <div class="span12">
                <h4 class="rheading">Step 1 : 당신이 알레르기를 가지고 있는 재료는? <span class="span1"></span></h4>
                <?php
                include './dbcon.php';
                //쿼리문 작성
                $query = "SELECT * FROM ingredients where Allergy = 1";
                //쿼리보내고 결과를 변수에 저장
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                  echo "<span style='margin: 5px;'><input style='margin-right: 5px;' type='checkbox' name='Allergy[]' value='" . $row[Ingredient_code] . "'>" . $row[Ingredient_name] . "</span>";
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <h4 class="rheading">Step 2 : 당신이 혐오하는 재료는? <span class="span2"></span></h4>
                <?php
                $query = "SELECT * FROM ingredients where Unique_taste = 1";
                //쿼리보내고 결과를 변수에 저장
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) {
                  echo "<span style='margin: 5px;'><input style='margin-right: 5px;' type='checkbox' name='Unique_taste[]' value='" . $row[Ingredient_code] . "'>" . $row[Ingredient_name] . "</span>";
                }
                ?>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <h4 class="rheading">Step 3 : 당신이 선호하는 맛은? <span class="span3"></span></h4>
                <span style='margin: 5px;'><input style='margin-right: 5px;' type='checkbox' name='Sweet' value="달콤">달콤한 맛</span>
                <span style='margin: 5px;'><input style='margin-right: 5px;' type='checkbox' name='Fruity' value="상큼">상큼한 맛</span>
                <span style='margin: 5px;'><input style='margin-right: 5px;' type='checkbox' name='Nutty' value="고소">고소한 맛</span>
                <span style='margin: 5px;'><input style='margin-right: 5px;' type='checkbox' name='ALL' value="모두">상관 없음</span>
              </div>
            </div>
            <button class="btn btn-primary btn-block pbc" style="height:5%; float: right; margin-top: -20px;" type="submit">제출</button>
          </div>

        </form>
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
<?php
} else {

  echo '<script>
  alert("로그인 먼저 하고 시도하세요!"); 
  location.replace("index.php");
</script>';
}
?>