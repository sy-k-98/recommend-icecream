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

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/Icecream/BR_logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- =======================================================
    Theme Name: Lumia
    Theme URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->

    <style>
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
            margin-bottom: 100px;
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

        .h135{
            min-height: 150px;
        }

        h5 {
            height: 27px !important;
            white-space: nowrap;
            font-size: 14px;
            text-align: center;
        }

        .pbc{
            background-color: #0360B0 !important;
            background-image: none;
        }

        .pbc:hover{
            background-color: #de5ba7 !important;
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
                                    <li class="dropdown">
                                        <a href="PickYourFlavor.php" style="padding-right: 10px"><i class="icon-ok"></i> Pick Your
                                            Flavor </i></a>
                                    <li class="active">
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
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h4 class="rheading"> 아이스크림 리뷰 <span class="span100"></span></h4>
                        <ul class="thumbnails">
                            <?php
                            include './dbcon.php';

                            //쿼리문 작성
                            $query = "select * from Icecream";
                            //쿼리보내고 결과를 변수에 저장
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<li class="span4 power">
                                <div class="thumbnail">
                                    <img src="' . $row[Img_ref] . '" alt="">
                                    <div class="caption">
                                        <div class="h135"><h5>' . $row[Icecream_name] . '</h5> 
                                        <p>' . $row[Explanation] . '</p></div>
                                        <form action="reviewsDetail.php" method="post">
                                        <input type="hidden" name="Flavor" value="' . $row[Icecream_code] .'">
                                        <p align="center"><button type="submit" class="btn btn-primary btn-block pbc">Open</button></p>
                                        </form>
                                    </div>
                                </div>
                            </li>';
                            }
                            ?>
                        </ul>
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