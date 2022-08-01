<?php


function fib(int $n, array &$temp = []): int
{

    if (array_key_exists($n, $temp)) {
        return $temp[$n];
    }
    if ($n <= 2) {
        return 1;
    }

    $temp[$n] = fib($n - 1, $temp) + fib($n - 2, $temp);
    return $temp[$n];
}


print (fib(6)) . PHP_EOL;
print (fib(7)) . PHP_EOL;
print (fib(5)) . PHP_EOL;
print (fib(50)) . PHP_EOL;



