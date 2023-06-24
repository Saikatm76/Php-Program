<?php
$n=$_POST['limit'];
$reverse=strrev($n);
if($n==$reverse)
{
	echo "The string ".$n." is palindrome";
}
else echo "The string ".$n." is not palindrome";
?>