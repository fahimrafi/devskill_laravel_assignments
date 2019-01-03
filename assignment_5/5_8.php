<?php

$num1 = "5000";
$num2 = "9000";



function string_to_int_array($string)
{
    $array = str_split($string);
    foreach($array as  &$vals)
    {
        $vals=(int)$vals;
    }
    return $array;
}

function swap(&$one,&$two)
{
    $temp= $one;
    $one= $two;
    $two=$temp;
}   


function sub($string_num1,$string_num2)
{   
    if (strlen($string_num1)<strlen($string_num2))
    {
        swap($string_num1,$string_num2);
    }
    else if(strlen($string_num1)==strlen($string_num2))
    {
        $check1= string_to_int_array($string_num1);
        $check2= string_to_int_array($string_num2);



        if($check1[0] < $check2[0])
        {
            swap($string_num1,$string_num2);
        }

    }
    

    $string_num1 = "00000".$string_num1;
    $add_to_num2= str_repeat("0", strlen($string_num1)-strlen($string_num2));
    $string_num2 = $add_to_num2 . $string_num2;


    //reverse string
    $rev_string_num1= strrev($string_num1);
    $rev_string_num2= strrev($string_num2);    

    //string to int array
    $rev_num1_int_array = string_to_int_array($rev_string_num1);
    $rev_num2_int_array = string_to_int_array($rev_string_num2);

    
    $result_array = array();
    $result_rev_array = array();
    $carry = 0;
    $temp1 = 0;
    for($i=0; $i<strlen($rev_string_num1);$i++)
    {
        if($rev_num1_int_array[$i]<$rev_num2_int_array[$i])
        {            
            $temp1 = (10 + $rev_num1_int_array[$i]) - ($rev_num2_int_array[$i]+$carry);   
            $carry= $carry + 1;
        }
        else
        {
            $temp1 =  $rev_num1_int_array[$i] - ($rev_num2_int_array[$i]+$carry);
            $carry = 0; 
        }
        
        $result_rev_array[$i] = (int)$temp1;     

                                            
    }

    $result_rev_string= implode("", $result_rev_array);

    $result =strrev($result_rev_string);

   

    $final_result = ltrim($result, '0');

    if ($final_result =="" )
    {
        return "0";
     }

    else
    {
        return $final_result;
    }
}

$substraction = sub($num1,$num2);

echo $substraction;








