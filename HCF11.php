<?php
$n=$_POST['a'];
$r=$_POST['b'];
while($n!=$r)
{
	if($n>$r)
	{
		$n=$n-$r;
	}
	else
	{
		$r=$r-$n;
	}
}
echo "HCF=".$n;
?>