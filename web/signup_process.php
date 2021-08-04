<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '1234',
  'dove');
$sql = "
  INSERT INTO users
    (id, passwd, name, created)
    VALUES(
        '{$_POST['id']}',
        '{$_POST['pw']}',
        '{$_POST['name']}',
        NOW()
    );
";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo "<script>alert('실패했습니다');</script>";
	?>
  	<meta http-equiv="refresh" content="0;url=signup.php" />
	<?php
} else {?>
  	<meta http-equiv="refresh" content="0;url=login.php" />
	<?php
}
?>
