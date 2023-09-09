function memoize(fn) {
  const cache = new Map();

  return function (...args) {
    const key = JSON.stringify(args);
    if (cache.has(key)) {
      return cache.get(key);
    } else {
      const result = fn(...args);
      cache.set(key, result);
      return result;
    }
  };
}

// Define the sum, fib, and factorial functions

const sum = memoize((a, b) => a + b);

const fib = memoize(function fib(n) {
  if (n <= 1) return 1;
  return fib(n - 1) + fib(n - 2);
});

const factorial = memoize(function factorial(n) {
  if (n <= 1) return 1;
  return factorial(n - 1) * n;
});

// Example usage:
console.log(sum(2, 3)); // Computes and caches the result
console.log(sum(2, 3)); // Retrieves the cached result
console.log(fib(5));    // Computes and caches the result
console.log(fib(5));    // Retrieves the cached result
console.log(factorial(4)); // Computes and caches the result
console.log(factorial(4)); // Retrieves the cached result
