<?
$db_host = "localhost";
$db_user = "root";
$db_passwd = "0000";
$db_name = "project";

// DB 연결
$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
