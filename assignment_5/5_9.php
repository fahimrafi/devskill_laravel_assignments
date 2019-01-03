<?php

//


//Replace this values for your desired calculation
$num1 = "5500";
$num2 = "100000";



//function to convert string number to int array;
function string_to_int_array($string)
{
    $array = str_split($string);
    foreach($array as  &$vals)
    {
        $vals=(int)$vals;
    }
    return $array;
}
//function for swaping number ;
function swap(&$one,&$two)
{
    $temp= $one;
    $one= $two;
    $two=$temp;
} 

//function for adding two string numbers;
function sum($string_num1,$string_num2)
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

    //main calculation starts....
    $result_array = array();
    $result_rev_array = array();
    $carry = 0;
    $temp1 = "";
    for($i=0; $i<strlen($rev_string_num1);$i++)
    {
        $temp1 =  $rev_num1_int_array[$i] + ($rev_num2_int_array[$i] + $carry); 
        $carry= (int)($temp1/10);
        $result_rev_array[$i] = (int)($temp1%10); 
    }

    $result_rev_string= implode("", $result_rev_array);
    $result =strrev($result_rev_string);
    $final_result = ltrim($result, '0'); //removing zeros from left sides

    if ($final_result =="" )
    {
        return "0"; 
    }

    else
    {
        return $final_result;
    }
}


/*Multiplication function that multiplies first parameter by second parameter,
 where second parameter can be only one digit long. */
function multiply($N1,$N2)
{
    $product="0";
    
    
    for($i=0;$i<(int)$N2;$i++)
    {
        $product= sum($product,$N1);

        
    }
    return $product;
}

//Final multiplication function which gives product of two input string numbers
function product($no1,$no2)
{
    $rev_no2=strrev($no2);
    $res="0";
    
    for($i=0;$i<strlen($no2);$i++)
    {
        $res = sum(multiply($no1,$rev_no2[$i]),$res);
        $res = $res . str_repeat("0",$i);

    }

return $res;
}



echo product($num1,$num2);
