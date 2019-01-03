<?php


$x1=5;
$y1=6;
$r1=10;

$x2=6;
$y2=5;
$r2=20;


$R=$r1+$r2;
$distance = sqrt(pow(($x2-$x1),2)+pow(($y2-$y1),2));



if($distance<=$R)
{
    echo "YES";
}

else
{
    echo "NO";
}


