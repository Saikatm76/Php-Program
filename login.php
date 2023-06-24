<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'saikat');
$uname=$_POST['username'];
$pass=$_POST['password'];
if(!empty($uname)){
if(!empty($pass)){
$q = "select * from ebook where username='$uname' && password='$pass'";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{
	header('location:aec1.php');
	echo "login successful";
}
else
{
 echo "you have entered wrong password";
}
}
else
{
	echo "password should not be empty";
	
}
}
else
{
	echo "username should not be empty";
}
?>