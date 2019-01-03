<?php

class Queue
{
    
    private $array  = [];
    
    

    function enqueue($item)
    {
        array_push($this->array, $item);
    }

    function dequeue()
    {
        return array_shift($this->array);
    }
}


$myQueue = new Queue();

$myQueue->enqueue(400);
$myQueue->enqueue(600);
$myQueue->enqueue(800);
$myQueue->enqueue(900);
$myQueue->enqueue(1000);
$myQueue->enqueue(1200);







echo $myQueue->dequeue() . "\n";
echo $myQueue->dequeue() . "\n";


$myQueue->enqueue(1300);
$myQueue->enqueue(1400);
$myQueue->enqueue(1500);

echo $myQueue->dequeue() . "\n";


