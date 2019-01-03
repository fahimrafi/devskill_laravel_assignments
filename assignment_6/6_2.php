<?php

class Queue
{   

    public $position = 0 ;
    function __construct()
    {
        $queue=array();
    }

    public function enqueue($item)
    {   
        if(empty($this->queue))
        {
            $this->queue[0]=$item;
        }
        else
        {
            for($i=sizeof($this->queue)-1;$i>=1;$i--)
            {
                $this->queue[$i] = $this->queue[$i-1]; 
            }
            $this->queue[0] = $item;
        }
        
        

    }
    public function dequeue()
    {
        if(empty($this->queue))
        {
            echo "Queue is empty!! \n";
        }
        else
        {
            for($i=sizeof($this->queue)-1;$i>=1;$i--)
            {
                $this->queue[$i] = $this->queue[$i-1]; 
            }
        }
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