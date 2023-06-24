<?php
$n=$_POST['limit'];
	$j=0;
	$temp=$n;
	while($temp!=0)
	{
		$p=$temp%10;
		$temp=$temp/10;
		$j=$j+($p*$p*$p);
	}
	if($j==$n)
{
	echo " ",$n," is a amstrong number";
}
else
echo " ",$n," is not a amstrong number";
?>