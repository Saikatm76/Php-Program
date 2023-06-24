<?php
$number=array(5,3,4,7,9,2,11,1);
$len=count($number);
$max=$number[0];
for($i=0;$i<$len;$i++)
{
	if($max<$number[$i])
	{
		$max=$number[$i];
	}
}
echo "The maximum Array Element is ".$max."<br>";
$min=$number[0];
for($j=0;$j<$len;$j++)
{
	if($min>$number[$j])
	{
		$min=$number[$j];
	}
}
echo "The minimum Array Element is ".$min;
?>