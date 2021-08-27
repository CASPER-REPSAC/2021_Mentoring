<?php session_start(); 
	if(!isset($_SESSION['user_id'])){
		echo"<script>alert('로그인 하세요!')</script>";
		?>
	<meta http-equiv="refresh" content="0;url=index.php" />
<?php
	}

	$number = $_GET['number'];
	$conn = mysqli_connect('localhost','root','1234','dove');
	$sql = "select * from board where id = $number";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="nav-bar">
			<div class="content">
				<div class="logo" onclick="location.href='./index.php'">
					로고
				</div>
				<?php
				if (isset($_SESSION['user_id'])){?>
					<button type="button" class="box white" onclick="location.href='logout.php'">
					로그아웃
				</button>
					<?php
				}else {?>
					<button type="button" class="box white" onclick="location.href='login.php'">
					로그인
				</button><?php
				}
				 ?>
			</div>
		</div>
		<div class="article">
			<div class="container mb5 mt100">
				<div class="title  ">
					<?php echo $rows['title']?>
				</div>
				<button class="box black">
					<a href="delete_board.php?number=<?php echo $rows['id']?>">삭제</a>
				</button>
			</div>
			<hr />
			<div class="auth-info">
				<?php echo $rows['name']?> | <?php echo $rows['date']?>
			</div>
			<div class="pt20 pb100">
				<?php echo nl2br($rows['content'])?>
			</div>
		</div>
	</body>
</html>