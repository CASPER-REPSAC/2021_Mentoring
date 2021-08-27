<?php session_start(); 
	if(!isset($_SESSION['user_id'])){
		echo"<script>alert('로그인 하세요!')</script>";
		?>
	<meta http-equiv="refresh" content="0;url=index.php" />
<?php
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="nav-bar">
			<div class="content">
				<div class="logo" onclick="location.href='index.php'">
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
			<div class="title mb5 mt100">
				게시글 작성
			</div>

			<hr class="mb5" />
			<form class="write" action="./write_process.php" method="POST">
				<div>
					<label for="title">제목</label><br />
					<input type="text" id="title" name = "title" class="write-box"/>
				</div>
				<div>
					<label for="content">내용</label>
					<br />
					<textarea id="content" name="content" class="write-box h500"></textarea>
				</div>
				<button type="submit" class="box black right">
					작성
				</button>
			</form>
		</div>
	</body>
</html>