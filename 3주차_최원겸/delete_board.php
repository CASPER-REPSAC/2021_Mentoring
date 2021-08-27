<?php session_start(); 
	if(!isset($_SESSION['user_id'])){
		echo"<script>alert('로그인 하세요!')</script>";
		?>
	<meta http-equiv="refresh" content="0;url=index.php" />
<?php
	}
	$name = $_SESSION['user_id'];
	$number = $_GET['number'];
	$conn = mysqli_connect('localhost','root','1234','dove');
	$sql = "select * from board where id = $number";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_fetch_assoc($result);
	if($name == $rows['name']){
		$deletesql = "delete from board where id = $number";
		
		if($result = mysqli_query($conn,$deletesql)){
			echo "<script>alert('성공적으로 삭제되었습니다')</script>";
			?><meta http-equiv="refresh" content="0;url=index.php" /><?php
		}
		else{
			echo "<script>alert('실패했습니다')</script>";
		}
		
	}
	else{
		echo "<script>alert('본인만 삭제할 수 있습니다')</script>";
		?><meta http-equiv="refresh" content="0;url=index.php" /><?php
	}
?>