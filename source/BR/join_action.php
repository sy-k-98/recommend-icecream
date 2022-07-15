<?php
include './dbcon.php';

$id = $_POST[id];
$pw = $_POST[pw];
$name = $_POST[name];

//입력받은 데이터를 DB에 저장
$query = "insert into Users (User_ID, User_PW, Name) values ('$id', '$pw', '$name')";
$result = $conn->query($query);

//저장이 됐다면 (result = true) 가입 완료
if ($result) {
    ?> <script>
        alert('가입 되었습니다.');
        location.replace("login.html");
    </script>

<?php   } else {
    ?> <script>
        alert("이미 있는 ID입니다.");
        history.back();
    </script>
<?php   }
mysqli_close($conn);
?>