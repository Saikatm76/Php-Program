<?php
$n=$_POST['a'];
$r=$_POST['b'];
$s=$_POST['c'];
$i=1;
while($i>0)
{
	if($i%$n==0 && $i%$r==0 && $i%$s==0)
	{
		echo "LCM=".$i;
		break;
	}
       else
            $i++;
}
?>