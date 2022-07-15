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
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h4 class="rheading"> 추천 목록 <span class="span100"></span></h4>
                        <ul class="thumbnails">
                            <?php
                            include './dbcon.php';

                            # Step 1 : 합집합 (알레르기가 있는 재료가 든 아이스크림과 혐오하는 재료가 든 아이스크림을 합집합으로 구한다.)
                            $for_0 = 'ingredient_code = ';
                            $for_1 = ' || ingredient_code = ';

                            $Allergy_Ingredient_code = [];
                            if (count($_POST['Allergy']) == 0) {
                                # 예외 처리 : 알레르기가 있는 재료가 없을 때는 결과로 NULL을 반환한다.
                                $Allergy_query = "SELECT NULL FROM icecream_ingredients";
                            } else {
                                for ($i = 0; $i < count($_POST['Allergy']); $i++) {
                                    $Allergy_Ingredient_code = $_POST['Allergy'];
                                }

                                $Allergy_where = '';
                                for ($i = 0; $i < count($Allergy_Ingredient_code); $i++) {
                                    if ($i == 0) {
                                        $Allergy_where .= $for_0 . $Allergy_Ingredient_code[$i];
                                    } else {
                                        $Allergy_where .= $for_1 . $Allergy_Ingredient_code[$i];
                                    }
                                };
                                # 알레르기 있는 재료가 든 아이스크림
                                $Allergy_query = "SELECT DISTINCT Icecream_code FROM icecream_ingredients WHERE " . $Allergy_where;
                            }

                            $Unique_taste_Ingredient_code = [];
                            if (count($_POST['Unique_taste']) == 0) {
                                # 예외 처리 : 혐오하는 재료가 없을 때는 결과로 NULL을 반환한다.
                                $Unique_query = "SELECT NULL FROM icecream_ingredients";
                            } else {
                                for ($i = 0; $i < count($_POST['Unique_taste']); $i++) {
                                    $Unique_taste_Ingredient_code = $_POST['Unique_taste'];
                                }

                                $Unique_where = '';
                                for ($i = 0; $i < count($Unique_taste_Ingredient_code); $i++) {
                                    if ($i == 0) {
                                        $Unique_where .= $for_0 . $Unique_taste_Ingredient_code[$i];
                                    } else {
                                        $Unique_where .= $for_1 . $Unique_taste_Ingredient_code[$i];
                                    }
                                };
                                # 혐오하는 재료가 든 아이스크림
                                $Unique_query = "SELECT DISTINCT Icecream_code FROM icecream_ingredients WHERE " . $Unique_where;
                            }
                            # 알레르기가 있는 재료가 든 아이스크림과 혐오하는 재료가 든 아이스크림의 합집합
                            $Union_query = $Allergy_query . " UNION "  . $Unique_query;

                            # 예외 처리 : 둘 중 하나가 NULL인데 UNION 기준 NULL인 쿼리문이 왼쪽에 있으면 오류가 나므로 오른쪽에 둔다.
                            if ($Allergy_query == "SELECT NULL FROM icecream_ingredients") {
                                $Union_query = $Unique_query . " UNION " . $Allergy_query;
                            }

                            // echo $Allergy_query ."<br>";
                            // echo $Unique_query."<br>";
                            // echo $Union_query."<br>";

                            # Step 2 : 차집합 (아이스크림 전체에서 위에서 구한 합집합의 결과를 뺀다. (차집합))

                            # 예외 처리 : 둘 다 NULL인 경우 차집합의 결과로 아이스크림 전체를 반환한다.
                            if ($Union_query == "SELECT NULL FROM icecream_ingredients UNION SELECT NULL FROM icecream_ingredients") {
                                $Middle_query = "SELECT * From Icecream";
                            } else {
                                # 아이스크림 전체에서 위에서 구한 합집합을 뺀 차집합
                                $Middle_query = "SELECT b.* from Icecream b
                                                LEFT OUTER JOIN (" . $Union_query . ") a
                                                ON a.Icecream_code = b.Icecream_code
                                                WHERE a.Icecream_code is null";
                            }

                            // echo $Middle_query."<br>";

                            # Step 3 : 교집합 (위에서 구한 차집합의 결과와 사용자가 선택한 맛(달콤/상큼/고소)에 속하는 아이스크림과 교집합의 결과를 구한다.)
                            $SFN = [];
                            if ($_POST['Sweet'] == "달콤") $SFN[] = $_POST['Sweet'];
                            if ($_POST['Fruity'] == "상큼") $SFN[] = $_POST['Fruity'];
                            if ($_POST['Nutty'] == "고소") $SFN[] = $_POST['Nutty'];

                            $for_0 = 'Sweet_Fruity_Nutty = ';
                            $for_1 = ' || Sweet_Fruity_Nutty  = ';

                            $SFN_query = "SELECT * FROM Icecream WHERE ";
                            # 예외 처리 : 사용자가 선택한 맛이 없거나 상관 없음을 체크한 경우 선택한 맛(달콤/상큼/고소)에 속하는 아이스크림을 아이스크림 전체 집합으로 한다.
                            if (count($SFN) == 0 || $_POST['ALL']) {
                                $SFN_query = "SELECT * FROM icecream";
                            } else {
                                for ($i = 0; $i < count($SFN); $i++) {
                                    if ($i == 0) {
                                        $SFN_query .= $for_0 . '"' . $SFN[$i] . '"';
                                    } else {
                                        $SFN_query .= $for_1 . '"' . $SFN[$i] . '"';
                                    }
                                }
                            }

                            // echo $SFN_query;

                            # 위에서 구한 차집합의 결과와 사용자가 선택한 맛(달콤/상큼/고소)에 속하는 아이스크림과 교집합
                            $Intersection_query = "SELECT x.* FROM (" . $Middle_query . ") x
                            INNER JOIN (" . $SFN_query . ") y ON x.Icecream_code = y.Icecream_code";

                            // echo $Intersection_query;

                            echo '<form action="Order.php" method="post">';
                            $result = mysqli_query($conn, $Intersection_query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<li class="span4 power">
                                <div class="thumbnail">
                                <img src="' . $row[Img_ref] . '" alt="">
                                <div class="caption">
                                <div class="h135"><h5>' . $row[Icecream_name] . '</h5> 
                                <p>' . $row[Explanation] . '</p></div>
                                <p align="center" class="btn btn-primary btn-block pbc2">
                                <input style="margin-right: 5px; margin-top:0" type="checkbox" name="Icecream[]" value="'
                                . $row[Icecream_code] . '">' . 선택하기 . '</p>
                                </div>
                                </div>
                                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <button class="btn btn-primary btn-block pbc" style="height:5%;" type="submit">주문하기</button>
                    </form>
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