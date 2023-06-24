<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'saikat');
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$uname=$_POST['username'];
$dateob=$_POST['dob'];
$pass=$_POST['password'];
$gen=$_POST['gender'];
$phone=$_POST['code'];
$mob=$_POST['mobile'];
$cpass=$_POST['cpassword'];

if(!empty($fname)){
if(!empty($lname)){
if(!empty($uname)){
if(!empty($pass)){
if(!empty($gen)){
if(!empty($dateob)){
if(!empty($phone)){
if(!empty($mob)){
if(!empty($cpass)){
if($con)
{
	echo "connection successful:::";
}
else
{
	echo "no connection";
}	
$q = "select * from ebook where username='$uname'";
$result = mysqli_query($con,$q);
$num= mysqli_num_rows($result);
if($num==1)
{
	echo "The Username you entered is already exist in the Database";
}
else if($pass==$cpass)
{
        header('location:homepage.php');
	$w="insert into ebook(firstname,lastname,username,dob,password,gender,code,mobile) values('$fname','$lname','$uname','$dateob','$pass','$gen','$phone','$mob')";
	mysqli_query($con,$w);
}
else echo "you have forgotten your password";
}
else echo "PLEASE REWRITE YOUR PASSWORD";
}
else echo "PLEASE PROVIDE YOUR MOBILE NUMBER";
}
else echo "COUNTRY CODE IS NOT GIVEN";
}
else echo "PLEASE ENTER YOUR DATE-OF-BIRTH TO SIGN IN";
}
else echo "PLEASE ENTER YOUR GENDER TO SIGN IN";
}
else echo "PLEASE ENTER YOUR PASSWORD TO SIGN IN";
}
else echo "PLEASE ENTER YOUR USER-NAME TO SIGN IN";
}
else echo "PLEASE ENTER YOUR LAST-NAME TO SIGN IN";
}
else echo "PLEASE ENTER YOUR FIRST-NAME TO SIGN IN";
?>