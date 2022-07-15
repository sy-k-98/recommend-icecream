<?php
include './dbcon.php';

session_start();
?>
<!-- <article class="container"> -->
<div style="margin: 10px; float: right;">
    <h1 style="font-size: 13px; display : inline;">
        <?php
        if (isset($_SESSION['User_ID'])) {
            echo $_SESSION['User_ID'];
            ?>님 안녕하세요.</h1>

        <button <button type="submit" class="btn btn-warning" onclick="location.href='logout.php'">로그아웃<i class="fa fa-check spaceLeft"></i></button>

        <!-- </article> -->
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
                                        <li class="dropdown">
                                            <a href="Reviews.php" style="padding-right: 10px"><i class="icon-pencil"></i> Reviews </i></a>
                                        </li>
                                        <li class="active">
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
                            <h4 class="rheading"> 주문 내역 <span class="span100"></span></h4>
                            <ul class="thumbnails" style="width: 100%">
                                <table class="table">


                                    <thead>
                                        <tr style='text-align:center;'>
                                            <th scope="col" style='background-color: #0360B0; color: white; text-align:center; white-space:nowrap;'>주문</th>
                                            <th scope="col" style='background-color: #0360B0; color: white; text-align:center; white-space:nowrap;'>주문한 아이스크림 종류</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include './dbcon.php';

                                        $User_ID = $_SESSION['User_ID'];
                                        $query = "SELECT * FROM Orders WHERE User_ID = '" . $User_ID . "'";
                                        $result = mysqli_query($conn, $query);

                                        # 로그인한 유저 정보로 Orders 테이블에서 주문번호 받아오기
                                        $Order_code = [];
                                        while ($row = mysqli_fetch_array($result)) {
                                            $Order_code[] = $row[order_code];
                                        }
                                        echo "<tr>";

                                        # 사용자의 모든 주문에 대해 작업 수행
                                        for ($i = 0; $i < count($Order_code); $i++) {
                                            $i_1 = $i + 1;
                                            # 주문 순서(인덱스) 출력
                                            echo "<th style='text-align:center;' scope='row'>" . $i_1 . "</th>";
                                            # Orders_Icecream 테이블에서 주문번호와 동일한 행의 아이스크림 번호 받아오기
                                            $query = "SELECT * FROM Orders_Icecream WHERE Order_code = " . $Order_code[$i];
                                            $result = mysqli_query($conn, $query);
                                            $Icecream_code = [];
                                            while ($row = mysqli_fetch_array($result)) {
                                                $Icecream_code[] = $row[Icecream_code];
                                            }
                                            echo "<td style='text-align:center;'>";
                                            # Icecream 테이블에서 받아온 아이스크림 번호와 일치하는 아이스크림 이름 받아와서 출력하기
                                            for ($j = 0; $j < count($Icecream_code); $j++) {
                                                $query2 = "SELECT * from Icecream WHERE Icecream_code = " . $Icecream_code[$j];
                                                $result2 = mysqli_query($conn, $query2);

                                                $row2 = mysqli_fetch_array($result2);
                                                echo $row2[Icecream_name] . "   ";
                                            }
                                            echo "</td>";
                                            echo "</tr>";
                                        }

                                        ?>
                                    </tbody>
                                </table>
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
<?php
} else {

    echo '<script>
  alert("로그인 먼저 하고 시도하세요!"); 
  location.replace("index.php");
</script>';
}
?>