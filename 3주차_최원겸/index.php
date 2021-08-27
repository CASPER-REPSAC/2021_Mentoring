<?php session_start(); 
$conn = mysqli_connect('localhost','root','1234','dove');
$sql = "select * from board order by date desc";
$result = mysqli_query($conn,$sql);
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
				<div class="logo" onclick="location.href='#'">
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
				게시판
			</div>

			<table class="mb5">
				<tr class="table-head">
					<th>id</th>
					<th>제목</th>
					<th>글쓴이</th>
					<th>작성날짜</th>
				</tr>
				<?php
				$num=1;
				while($rows = mysqli_fetch_assoc($result)){
				?><tr>
					<td><?php echo $num ?></td>
					<td><a href="article.php?number=<?php echo $rows['id']?>"><?php echo $rows['title'] ?></a></td>
					<td><?php echo $rows['name'] ?></td>
					<td><?php echo $rows['date'] ?></td>
				<?php $num++; } ?>
				</tr>
			</table>

			<button class="box black right" onclick="location.href='write.php'">
				글쓰기
			</button>
		</div>
	</body>
</html>
