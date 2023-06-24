<?php
$n=$_POST['limit'];
echo "<b>THE PRIME NUMBER UPTO ",$n," ARE::</b><br><br>";
for($i=2;$i<=$n;$i++)
{
	$c=0;
	for($j=1;$j<=$i;$j++)
	{
       if($i%$j==0)
       {
       $c++;
   }
	}
	if($c==2)
	{
		echo " ",$i," ";
	}
}
?>