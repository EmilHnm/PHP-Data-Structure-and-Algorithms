<?php

class queue
{
    protected $queue;
    protected $size;

    public function __construct($queue = array())
    {
        $this->queue = $queue;
    }

    //check empty queue
    public function empty()
    {
        return empty($this->queue);
    }

    //get size of queue
    public function size()
    {
        return count($this->queue);
    }

    // enqueue an item to the start of the queue
    public function enqueue($value)
    {
        array_unshift($this->queue, $value);
    }

    // dequeue an item from the queue
    public function dequeue()
    {
        return array_pop($this->queue);
    }

    // get first element
    public function front()
    {
        return $this->queue[0];
    }

    //get last element
    public function back()
    {
        return $this->queue[count($this->queue) - 1];
    }
}

$queue = new queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);

$queue->dequeue();

var_dump($queue);

var_dump($queue->back());
