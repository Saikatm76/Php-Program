<?php
$age=array("john"=>35,"peter"=>39,"alex"=>29);
$age['alex']=30;
echo $age["alex"]."<br>";
foreach($age as $x=>$val)
{
	echo $x."=>".$val."<br>";
}
?>