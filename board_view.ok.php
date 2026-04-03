<?php
$board_idx=$_GET['board_idx'];
$host = '127.0.0.1'; // MySQL 호스트
$username = 'root'; // MySQL 사용자명
$password = 'RlaEhdDud4^^*'; // MySQL 비밀번호
$database = 'poly'; // 사용할 데이터베이스명
$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
$sql="delete from board where board_idx=".$board_idx;
$result=mysqli_query($conn,$sql);
$result= mysqli_query($conn, $sql);
echo $result;
if($result != 1) {
echo"<script>
alert('글이 성공적으로 삭제되었습니다.');
location.href='./list.php';
</script>";
exit();
} ?>