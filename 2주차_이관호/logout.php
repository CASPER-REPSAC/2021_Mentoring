<?php
	session_start();
	session_destroy();
	echo "<script>alert('๋ก๊ทธ์์');</script>";
?>
<meta http-equiv="refresh" content="0;url=login.php"/>