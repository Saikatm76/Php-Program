<?php
$n=$_POST['a'];
$r=$_POST['b'];
$s=$_POST['c'];
if($n>$r && $n>$s)
{
	echo $n." is highest<br>";
}
else if($r>$s)
{
	echo $r." is highest<br>";

}
else echo $s." is highest<br>";
?>
<?php
$t=$_POST['a'];
$o=$_POST['b'];
$p=$_POST['c'];
if($t<$o && $t<$p)
{
	echo $t." is lowest";
}
else if($o<$p)
{
	echo $o." is lowest";

}
else echo $p." is lowest";
?>
