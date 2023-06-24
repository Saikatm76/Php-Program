<?php
$var1="2.5";
$var2=5.65;
$var3=6;
$converted1=(double)$var1;
echo $converted1,"<br>";
$converted2=(int)$var2;
echo $converted2,"<br>";
$converted3=(string)$var3;
echo $converted3,"<br>";
echo gettype($var1),"<br>";
echo gettype($var2),"<br>";
echo gettype($var3),"<br>";
echo gettype($converted1),"<br>";
echo gettype($converted2),"<br>";
echo gettype($converted3),"<br>";
?>