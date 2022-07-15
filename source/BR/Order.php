<?
include './login_info.php';

$User_ID = $_SESSION['User_ID'];
# 예외 처리 : 아이스크림을 하나도 선택하지 않았다면 주문에 저장하지 않고 다시 선택하게 하기
if (count($_POST['Icecream']) == 0) {
    echo "<script>alert('아이스크림을 하나 이상 선택하세요.'); history.go(-2);</script>";
} else {
    # 로그인한 유저 정보로 새로운 주문 하나 생성하기
    $query = "INSERT into Orders(User_ID) values('$User_ID')";
    mysqli_query($conn, $query);
    # 생성된 주문의 AUTO_INCREMENT값(주문번호) 받아오기
    $query = "SELECT LAST_INSERT_ID()";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    $Order_code = $row['LAST_INSERT_ID()'];
    # 사용자가 고른 아이스크림 저장하기
    $Icecream_code = [];
    for ($i = 0; $i < count($_POST['Icecream']); $i++) {
        $Icecream_code = $_POST['Icecream'];
    }
    # 주문번호와 사용자가 고른 아이스크림 정보를 Orders_Icecream 테이블에 등록하기
    for ($i = 0; $i < count($Icecream_code); $i++) {
        $Icecream_query = "INSERT INTO Orders_Icecream(Order_code,Icecream_code)
                                VALUES(" . $Order_code . "," . $Icecream_code[$i] . ")";
        mysqli_query($conn, $Icecream_query);
    }
    echo "<script>alert('주문이 완료되었습니다.'); location.href='./MyOrders.php';</script>";
}
