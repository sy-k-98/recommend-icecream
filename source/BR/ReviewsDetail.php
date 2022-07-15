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
            height: 200px !important;
        }

        .h135 {
            max-height: 180px;
            overflow: scroll;
        }

        h5 {
            height: 27px !important;
            white-space: nowrap;
            font-size: 15px;
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

        .pbc2 {
            background-color: #0360B0 !important;
            background-image: none;
        }

        .pbc2:hover {
            background-color: #de5ba7 !important;
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
                    <?php
                            include './dbcon.php';

                            //쿼리문 작성
                            $Flavor = $_POST['Flavor'];
                            $query = "SELECT Icecream_name FROM Icecream WHERE Icecream_code = " . $Flavor;
                            $result = mysqli_query($conn, $query);
    
                            while ($row = mysqli_fetch_array($result)) {
                                $Flavor_Name = $row[Icecream_name];
                            }
                            echo '<h4 class="rheading">' . $Flavor_Name . '에 대한 리뷰 보기<span class="span100"></span></h4>
                            <ul class="thumbnails">';
                            $query = "SELECT * FROM ReviewsOfIcecream WHERE Icecream_code =" . $Flavor;
                            //쿼리보내고 결과를 변수에 저장
                            $result = mysqli_query($conn, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<li class="span4 power">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="h135"><h5>';
                                $i = 0;
                                while ($i < $row[Score]) {
                                    echo "<img width='20' src='/BR/assets/img/star.jpg'>";
                                    $i++;
                                }
                                echo '</h5> 
                                        <p>' . $row[Contents] . '</p></div>
                                    </div>
                                </div>
                            </li> ';}?> 
                        </ul>
                    </div>
                            <?php
                            echo '   <form action="ReviewPost.php" method="post">
                                 <input type="hidden" name="Flavor" value="' . $Flavor . '">
                                 <button class="btn btn-primary btn-block pbc" style="height:5%;" type="submit">리뷰 남기러 가기</button>
                             </form>';
                            ?>
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