

<?php  
//run this code on console

//this program is valid for only odd number of lines


$line=21;

$H= ($line/2)+1;

for($i=0;$i<=$H;$i++)
{  
for($k=$H;$k>=$i;$k--)
{  
echo "  ";  
}  
for($j=1;$j<=$i;$j++)
{  
echo " *  ";  
}  
echo "\n";  
}  
for($i=($H-1);$i>=1;$i--)
{  
for($k=$H;$k>=$i;$k--)
{  
echo "  ";  
}  
for($j=1;$j<=$i;$j++)
{  
echo " *  ";  
}  
echo "\n";  
}  
?>  