<?php
$n=$_POST['limit'];
	$c=0;
	for($j=1;$j<=$n;$j++)
	{
       if($n%$j==0)
       {
       $c++;
   }
	}
	if($c==2)
	{
		echo " ",$n," is prime number";
	}
else echo " ",$n," is not prime number";

?>