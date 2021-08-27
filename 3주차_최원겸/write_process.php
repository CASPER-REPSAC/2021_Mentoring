<?php
	session_start(); 
	if(!isset($_SESSION['user_id'])){
		echo"<script>alert('로그인 하세요!')</script>";
		?>
	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php
		}
	
	$conn = mysqli_connect('localhost','root','1234','dove');
	$name = $_SESSION['user_id'];
	$title = $_POST['title'];
	$content = $_POST['content'];

	if($title == null || $content == null){
		echo "<script>alert('제목이나 내용을 입력해주세요')</script>";
		?>
	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php
	}
	else{
		$sql = "
			INSERT INTO board (title,content,name,date) VALUES('$title','$content','$name',now())";
		$result = mysqli_query($conn,$sql);
		if($result===false){
			echo "<script>alert('실패했습니다')</script>";
		}
		else{
			echo("<script>alert('글 작성에 성공했습니다.')</script>");
			?>
	<meta http-equiv="refresh" content="0;url=index.php" />
	<?php
		}
	}
	
?>