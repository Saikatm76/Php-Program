<?php
$n=$_POST['limit'];
$a=0;
$b=1;
for($i=0;$i<$n;$i++)
{
	if($i<=1)
	{
		echo $i." ";
	}
	else
	{
		$s=$a+$b;
		echo $s." ";
		$a=$b;
		$b=$s;
	}
}
?>