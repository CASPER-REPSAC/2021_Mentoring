<?php
  $user_id = $_POST['id'];
  $user_pw = $_POST['pw'];
  $conn = mysqli_connect('localhost','root','1234','dove');
  $sql = "SELECT * FROM users WHERE id = '".$user_id."';";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  if($_POST['id']==null||$_POST['pw']==null){
	  echo"<script>alert('아이디나 비밀번호를 입력하세요.');</script>";
	  ?>
	<meta http-equiv="refresh" content="0;url=login.php" />
	<?php
  }
else{
  if ($user_id == $row[0]) {
    if ($user_pw == $row[1]) {
      	session_start();
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_pw'] = $user_pw;
		?>
		<meta http-equiv="refresh" content="0;url=index.php" />
		<?php
	}else{
		echo "<script>alert('비밀번호가 틀립니다');</script>";
		?>
  		<meta http-equiv="refresh" content="0;url=login.php" />
		<?php
	}
  }else{
    echo "<script>alert('아이디가 없습니다');</script>";
    ?>
  	<meta http-equiv="refresh" content="0;url=login.php" />
	<?php
  }
}
?>