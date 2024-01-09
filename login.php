<?php
session_start();
include 'connection.php';

$username=$_POST['username'];
$password=$_POST['password'];

$login=mysqli_query($conn, "select * from user where username = '$username' and password = '$password'");

$check=mysqli_num_rows($login);

if ($check > 0){
	$data=mysqli_fetch_assoc($login);
	if ($data['level'] =="admin"){
		$_SESSION['username']=$username;
		$_SESSION['level']="admin";

		header("Location:admin.php");
		
	}elseif($data['level'] =="customer"){
		$_SESSION['username']=$username;
		$_SESSION['level']="customer";

		header("Location:customer.php");
	}else{
		header("Location:index.php?message=error");
	}
}else{
	header("Location:index.php?message=error");
}
?>