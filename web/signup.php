<?php session_start(); 
if(isset($_SESSION['user_id'])){
	echo "<script>alert('이미 로그인 되어 있습니다');</script>";
	?>
  	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php
}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
		<meta charset="utf-8">
	</head>
	<body>
		<div class="nav-bar">
			<div class="content">
				<div class="logo" onclick="location.href='./index.php'">
					로고
				</div>
			</div>
		</div>
		<div class="article put-center">
			<div class="black box-big">
				<div class="content">
					<div class="title mb5">
						서비스에 회원가입
					</div>
					<form action="signup_process.php" method="POST">
						<div>
							<label for="id">
								id
							</label>
							<br />
							<input type="text" id="id" name="id" class="input-box"/>
						</div>
						<div>
							<label for="pw">
								passward
							</label>
							<br />
							<input type="password" id="pw" name="pw" class="input-box"/>
						</div>
						<div>
							<label for="nickname">
								nickname
							</label>
							<br />
							<input type="text" name="name" class="input-box"/>
						</div>
						<div class="space-between">
							<a href="./login.html">로그인</a>
							<button type="submit" class="box white">
								회원가입
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
