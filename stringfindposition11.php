<?php
$str=$_POST['limit'];
$can=$_POST['limit1'];
$p=0;
echo "The position of ".$can." in ".$str." after positions ";
do{
	$p=strpos($str,$can,$p+1);
	echo $p." ";
}while($p);
?>