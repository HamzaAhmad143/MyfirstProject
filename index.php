<?php
	session_start();
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){ 
		header("location: dashboard.php");
	}
	
	if(isset($_POST['btn_submit'])){
		$user = $_POST['txt_user'];
		$password = $_POST['txt_password'];
		if($user=='admin' && $password=='password'){
			$_SESSION['logged_in'] = true;
			$_SESSION['name'] = $user;
			header("location: dashboard.php");
		} else {
			header("location: index.php?error=1");
		}
	} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login Form new develope </title>
</head>
<body>
	<form method="Post">
<?php 
	if(isset($_GET['error']))
		echo "<p> Invalied user or password.</p>"
?>
		<input type="text" name="txt_user">
		<input type="text" name="txt_password">
		<input type="submit" name="btn_submit">
	</form>
</body>
</html>
<?php } ?>