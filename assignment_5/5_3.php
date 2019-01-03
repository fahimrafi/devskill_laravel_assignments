<?php
$input = "I love Bangladesh, I love tiger";
$parts = explode(" " , $input);

for($i=0;$i<sizeof($parts); $i++)
{
    $parts[$i] = rtrim($parts[$i],",");
    $parts[$i] = rtrim($parts[$i],"!");
    $parts[$i] = rtrim($parts[$i],"?");
    $parts[$i] = rtrim($parts[$i],".");
    
}

print_r(array_count_values($parts));

