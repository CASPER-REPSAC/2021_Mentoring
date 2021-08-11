<?php
	$conn = mysqli_connect('localhost','root','1234','dove');

	$sql = "
	insert into users
		(id,passwd,name,created)
		values(
			'{$_POST['id']}',
			'{$_POST['pw']}',
			'{$_POST['name']}',
			NOW()
		);
	";
	if( $_POST['id'] =='' or $_POST['pw']=='' or $_POST['name'] == ''){
		echo "<script>alert('빈칸이 없어야 합니다');</script>";
		?>
			<meta http-equiv="refresh" content="0;url=signup.php"/>
		<?php
	}else{
		$result = mysqli_query($conn, $sql);
		if($result === false){
			echo "<script>alert('실패했습니다');</script>";
			?>
				<meta http-equiv="refresh" content="0;url=signup.php"/>
			<?php
		}else{
			echo "<script>alert('성공했습니다');</script>"
			?>
				<meta http-equiv="refresh" content="0;url=login.php"/>
			<?php
		}	
	}
?>