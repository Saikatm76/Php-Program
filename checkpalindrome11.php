<?php
$n=$_POST['limit'];
	$j=0;
     $t=$n;
	while(floor($t))
	{
		$p=$t%10;
        $t=$t/10;
        $j=$j*10;
        $j=$j+$p;
	}
    if($j==$n)
{
    echo " ",$n," is a palindrome number";
}
else echo " ",$n," not a palindrome number";
?>