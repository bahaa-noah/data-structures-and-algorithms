<?php


class Stack
{

    /**
     * stack items
     *
     * @var array
     */
    private array $items = [];

    /**
     * index to keep track of the top most item
     * @var integer
     */
    private int $top = -1;


    /**
     * Check if the stack is empty
     * @return boolean
     */
    public function isEmpty(): bool
    {
        return $this->top < 0;
    }

    /**
     * Pop from the stack last inserted item
     * O(1)
     * @return int|null
     */
    public function pop(): ?int
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->items[$this->top--];
    }

    /**
     * Push to the top of the stack
     * O(1)
     * @param integer $item
     * @return void
     */
    public function push(int $item): void
    {
        $this->top += 1;
        $this->items[$this->top] = $item;
    }


    /**
     * Get top item in the stack
     * O(1)
     * @return integer|null
     */
    public function peek(): ?int
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->items[$this->top];
    }
}


$stack = new Stack();
var_dump($stack->isEmpty());
$stack->push(5);
$stack->push(4);
$stack->push(6);
$stack->push(10);
var_dump($stack->isEmpty());
print ($stack->peek()) . PHP_EOL;
print_r($stack->pop()) . PHP_EOL;
print ($stack->peek()) . PHP_EOL;
print ($stack->pop()) . PHP_EOL;
print ($stack->pop()) . PHP_EOL;
print ($stack->pop()) . PHP_EOL;
var_dump($stack->isEmpty());
