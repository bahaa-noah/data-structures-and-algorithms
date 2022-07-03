<?php


class Queue
{

    /**
     *
     * @var array
     */
    private array $items = [];
    /**
     * @var integer
     */
    private int $head = -1;
    /**
     *
     * @var integer
     */
    private int $tail = -1;
    /**
     *
     * @var integer
     */
    private int $numberOfItems = 0;


    /**
     *
     * @return boolean
     */
    public function isEmpty(): bool
    {
        return $this->numberOfItems == 0;
    }

    /**
     *
     * @param integer $item
     * @return void
     */
    public function enqueue(int $item): void
    {

        if ($this->tail == count($this->items)) {
            $this->tail = -1;
        }

        if ($this->head == -1) {
            $this->head += 1;
        }
        $this->items[++$this->tail] = $item;
        $this->numberOfItems++;
    }


    /**
     *
     * @return integer|null
     */
    public function dequeue(): ?int
    {
        if ($this->isEmpty()) {
            return null;
        }

        if ($this->head == count($this->items)) {
            $this->head = -1;
        }

        $this->numberOfItems--;
        $item = $this->items[$this->head];
        $this->head += 1;

        return $item;
    }


    /**
     *
     * @return integer|null
     */
    public function peek(): ?int
    {
        if ($this->isEmpty()) {
            return null;
        }
        return $this->items[$this->head];
    }

    /**
     *
     * @return integer
     */
    public function totalItems(): int
    {
        return $this->numberOfItems;
    }
}


$queue = new Queue();
var_dump($queue->isEmpty()); //true
$queue->enqueue(5) . PHP_EOL;
$queue->enqueue(4) . PHP_EOL;
$queue->enqueue(6) . PHP_EOL;
$queue->enqueue(10) . PHP_EOL;
$queue->enqueue(46) . PHP_EOL;
print ($queue->dequeue()) . PHP_EOL; // 5
print ($queue->peek()) . PHP_EOL; // 4
print ($queue->dequeue()) . PHP_EOL; //4
print ($queue->dequeue()) . PHP_EOL; //6
print ($queue->dequeue()) . PHP_EOL; //10
print ($queue->dequeue()) . PHP_EOL; //46
var_dump($queue->isEmpty()); //true
$queue->enqueue(2) . PHP_EOL;
$queue->enqueue(4) . PHP_EOL;
$queue->enqueue(6) . PHP_EOL;
$queue->enqueue(8) . PHP_EOL;
$queue->enqueue(10) . PHP_EOL;
print ($queue->dequeue()) . PHP_EOL; // 2
print ($queue->dequeue()) . PHP_EOL; //4
print ($queue->dequeue()) . PHP_EOL; //6
print ($queue->dequeue()) . PHP_EOL; //8
var_dump($queue->isEmpty()); //false
$queue->enqueue(11) . PHP_EOL;
$queue->enqueue(12) . PHP_EOL;
$queue->enqueue(13) . PHP_EOL;
print ($queue->dequeue()) . PHP_EOL; //10  
print ($queue->dequeue()) . PHP_EOL; //11
print ($queue->dequeue()) . PHP_EOL; //12
print ($queue->dequeue()) . PHP_EOL; //13
var_dump($queue->isEmpty()); //true