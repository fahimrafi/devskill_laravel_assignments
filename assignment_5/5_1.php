<?php
$givenString= "33, 0, 0";

$dirtyAges= explode(" ",$givenString);

for($i=0; $i<sizeof($dirtyAges);$i++)
{
    $freshAges[$i]= rtrim($dirtyAges[$i]);
}

$floatsAges = array_map('floatval', $freshAges);

/*for($i=0; $i<sizeof($floatsAges);i++)
{
    $sum = $sum + $floatsAges[$i];
}
$average = $sum/sizeof($floatsAges);

*/


$average = array_sum($floatsAges)/sizeof($floatsAges);

echo $average;


?>

