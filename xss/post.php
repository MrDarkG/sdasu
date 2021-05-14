<?php 
require_once("../sqli/conf/db.php");
require_once("../sqli/auth/checkauth.php");

if (isset($_POST['comment'])) {
	if ($_POST['comment']=="") {
		header("Location: index.php?error");
		exit();	
	}
	$comment=$_POST['comment'];
	$sql = "INSERT INTO `comments`(`comment`) VALUES ('$comment')";
	$result = $conn->query($sql);


	$conn->close();
	header("Location: index.php?success");
	exit();
}
else{
	header("Location: index.php?error");
	exit();	
}
?>