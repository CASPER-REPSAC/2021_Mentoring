<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
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
				<tr>
					<td>1</td>
					<td><a href="article.html">이건 제목</a></td>
					<td>이름</td>
					<td>2021.07.xx</td>
				</tr>
				<tr>
					<td>2</td>
					<td><a href="article.html">이건 제목2</a></td>
					<td>이름2</td>
					<td>2021.08.xx</td>
				</tr>
			</table>

			<button class="box black right" onclick="location.href='write.html'">
				글쓰기
			</button>
		</div>
	</body>
</html>