<?php
$number=array(5,7,2,11,9);
$len=count($number);
for($i=0;$i<$len;$i++)
{
	for($j=$i+1;$j<$len;$j++)
	{
		if($number[$i]>$number[$j])
		{
			$a=$number[$i];
			$number[$i]=$number[$j];
			$number[$j]=$a;
		}
	}
}
echo "In Ascending order the numbers are<br>";
for($i=0;$i<$len;$i++)
{
	echo $number[$i]." ";
}
?>