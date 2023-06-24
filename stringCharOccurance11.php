<?php
$str=$_POST['limit'];
$can=$_POST['limit1'];
$p=0;
$count=0;
do{
	$p=strpos($str,$can,$p+1);
	if($p)
	{
		$count++;
	}
}while($p);
echo "The occurance of ".$can." in ".$str." is ".$count;
?>