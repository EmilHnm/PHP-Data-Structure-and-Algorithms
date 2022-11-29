<?php

class stack
{
    protected $stack;

    public function __construct($ar = array())
    {
        $this->stack = $ar;
    }

    //check empty stack
    public function empty()
    {
        return empty($this->stack);
    }

    //get size of stack
    public function size()
    {
        return count($this->stack);
    }

    //get top of stack
    public function top()
    {
        return current($this->stack);
    }

    //push item to stack
    public function push($value)
    {
        array_unshift($this->stack, $value);
    }

    //pop item from stack
    public function pop()
    {
        array_shift($this->stack);
    }
}

// test 

$stack = new stack();
var_dump($stack->empty());

$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);


var_dump($stack->empty());

var_dump($stack->size());

var_dump($stack->pop());

var_dump($stack);


var_dump($stack->top());

var_dump($stack->size());
