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
<?php
} else {
?>
    <button type="submit" class="btn btn-info" onclick="location.href='login.html'">로그인<i class="fa fa-check spaceLeft"></i></button>
    <button type="submit" class="btn btn-warning" onclick="location.href='join.html'">회원가입<i class="fa fa-check spaceLeft"></i></button>
    </div>
<?php   }
?>