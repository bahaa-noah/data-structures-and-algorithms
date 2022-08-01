const fib = (n, temp = {}) => {

    if (n in temp) return temp[n];
    if (n <= 2) return 1;

    temp[n] = fib(n - 1, temp) + fib(n - 2, temp);
    return temp[n];

}

console.log(fib(7));
console.log(fib(8));
console.log(fib(9));
console.log(fib(50));