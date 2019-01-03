<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$graph= array();

echo "lets make an 2d array first!! \n";

echo "Enter number of rows:";
fscanf(STDIN, "%d", $r);
echo "Enter number of columns:";
fscanf(STDIN, "%d", $c);

for($i=0;$i<$r;$i++)
    {
        $graph[$i]= array(); 
    }

for($i=0;$i<$r;$i++)
{   
    $I=$i+1;
    echo "Enter elements of row-$I: \n";
    for($j=0;$j<$c;$j++)
    {
        
        fscanf(STDIN, "%s", $N);
        $graph[$i][$j]=$N;
    }
}


echo "Your entered 2d array is \n";
for($i=0;$i<$r;$i++)
{
   
    for($j=0;$j<$c;$j++)
    {
        
     echo $graph[$i][$j]."\t";

    }

    echo "\n";
}

echo "Now choose a number from above array to finds it row and column positions!! \n";

echo "Choosen Number:";

fscanf(STDIN, "%s", $N);

$countFound=0;
for($i=0;$i<$r;$i++)
{   
    for($j=0;$j<$c;$j++)
    {   

        if ($graph[$i][$j]==$N)
        {   
            $countFound =$countFound+1;
            $I=$i+1;
            $J=$j+1;
            echo "row = $I, column = $J";
            echo "\n";
            break;
        }
       
    }
    

   
}
if($countFound==0)
{
    echo "number not found";
}



