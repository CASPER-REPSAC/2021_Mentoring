	<?php
	$number = $_GET['number'];
	$conn = mysqli_connect('localhost','root','1234','dove');
	$sql = "select * from board where id = $number";
	$result = mysqli_query($conn,$sql);
	$rows = mysqli_fetch_assoc($result);
	echo $rows['name'];
?>