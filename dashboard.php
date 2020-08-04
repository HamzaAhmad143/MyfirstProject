<?php
session_start();
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> dashboard </h1>
	<p> user : <?php echo $_SESSION['name'];?> </p>
	<a href="logout.php"> Logout </a>
</body>
</html>
<?php } else { 
	header("location: index.php");
}
?>