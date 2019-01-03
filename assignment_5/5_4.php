
<?php



class Factorial{
    
    public $number ;

    public function calculateFactorial($number){
       
        $result = 1;

         for($i=1; $i<=$number; $i++)
         {
            $result = $result * $i;
         }
    
        return $result;

    }
}


$myFactorial=new Factorial;

echo $myFactorial-> calculateFactorial(5);

/*
//another option
<?php

$input=5;

class Factorial{
    
    public $number ;

    public function calculateFactorial(){
       
        $result = 1;

         for($i=1; $i<=$this->number; $i++)
         {
            $result = $result * $i;
         }
    
        return $result;

    }
}


$myFactorial=new Factorial;
$myFactorial->number=$input;
echo $myFactorial-> calculateFactorial();
*/


