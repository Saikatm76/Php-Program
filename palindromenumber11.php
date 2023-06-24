<?php
$n=$_POST['limit'];
echo "<b>THE PALINDROME NUMBER UPTO ",$n," ARE::</b><br><br>";
for($i=1;$i<=$n;$i++)
{
	$j=0;
     $t=$i;
	while(floor($t))
	{
		$p=$t%10;
        $t=$t/10;
        $j=$j*10;
        $j=$j+$p;
	}
    if($j==$i)
{
    echo " ",$i," ";
}
}
?>