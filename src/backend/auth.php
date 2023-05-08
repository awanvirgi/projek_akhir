<?php 
session_start();
 
include_once 'connect.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
$data = mysqli_query($connect,"SELECT * FROM users WHERE email='$email' AND password='$password'");
 
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = true;
	header("location:../frontend/index.php");
}else{
	header("location:../frontend/login.php");
}
?>