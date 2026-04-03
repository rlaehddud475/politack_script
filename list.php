<HTML>
<TITLE>
<meta charset="UTF-8">
</TITLE>
<?php
$host = '127.0.0.1'; // MySQL 호스트
$username = 'root'; // MySQL 사용자명
$password = 'RlaEhdDud4^^*'; // MySQL 비밀번호
$database = 'poly'; // 사용할 데이터베이스명
$conn = mysqli_connect($host, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
if (!$conn) {
die('MySQL 연결 실패: ' . mysqli_connect_error());
}
$query = "SELECT * FROM board";
$result = mysqli_query($conn, $query);
?>
</head>
<body>
<h2>list.php</h2>
<table>
<tr>
<th id='col1'>NO</th>
<th id='col2'>제목</th>
<th id='col3'>글쓴이</th>
<th id='col4'>등록일</th>
<th id='col5'>조회수</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td id='col1'><?php echo $row["board_idx"] ?></td>
<td id='col2'><?php echo $row["title"] ?></td>
<td id="col3"><?php echo $row["write_name"] ?></td>
<td><?php echo $row["reg_date"] ?></td>
<td id='col5'><?php echo $row["read_num"] ?></td>
<?php } ?>
</tr>
</table>
</body>
</html>
