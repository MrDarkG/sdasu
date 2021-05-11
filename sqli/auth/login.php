<?php 
require_once("../conf/db.php");


$password=$_GET['password'];
$email=$_GET['email'];
 $sql = "SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  	$_SESSION["id"]=1;
  	echo "hello admin";
} else {
  echo "invalid creditionals";
}
$conn->close();
 ?>