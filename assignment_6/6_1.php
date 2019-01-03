<?php


class Stack
{   

    public $position = 0 ;
    function __construct()
    {
        $stack=array();
    }

    public function push($item)
    {
        
        $this->stack[$this->position++] = $item;

    }
    public function pop()
    {
        unset($this->stack[sizeof($this->stack)-1]);
    }

    public function isEmpty($stack)
    {

    }

    public function display()
    {   
        if (empty($this->stack)) 
        {
            echo "Stack is empty";
        }
        else
        {
            for($i=sizeof($this->stack)-1;$i>=0;$i--)
            {
                echo $this->stack[$i]. "\n";
            }
        }
    }

    public function reset()
    {
        $this->stack=array();
    }
}


$newStack= new Stack;


$newStack->push(50);
$newStack->push(60);
$newStack->push(70);
$newStack->push(90);
$newStack->push(100);
$newStack->push(110);


echo $newStack->display()."\n";


$newStack->pop();

echo $newStack->display()."\n";


$newStack->reset();

echo $newStack->display()."\n";