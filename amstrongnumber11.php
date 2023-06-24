<?php
$n=$_POST['limit'];
echo "<b>THE AMSTRONG NUMBER UPTO ",$n," ARE::</b><br><br>";
for($i=1;$i<=$n;$i++)
{
	$j=0;
	$temp=$i;
	while($temp!=0)
	{
		$p=$temp%10;
		$temp=$temp/10;
		$j=$j+($p*$p*$p);
	}
	if($j==$i)
{
	echo " ",$i," ";
}
}
?>