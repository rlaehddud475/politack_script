<?php
$write_name = $_POST['writer'];
$host = '127.0.0.1'; // MySQL 호스트
$username = 'root'; // MySQL 사용자명
$password = 'RlaEhdDud4^^*'; // MySQL 비밀번호
$database = 'poly'; // 사용할 데이터베이스명
$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
$sql="insert into board(title, contents,write_name,reg_date, read_num) values('".$title."','its
contents3','".$write_name."',sysdate(),0)";
echo $sql;
$result= mysqli_query($conn, $sql);
if($result > 0) {
echo"<script>
alert('글이 성공적으로 등록되었습니다.');
location.href='./list.php';
</script>";
exit();
}
?>
