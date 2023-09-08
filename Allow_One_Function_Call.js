function once(fn) {
  let called = false;
  let result;

  return function (...args) {
    if (!called) {
      called = true;
      result = fn(...args);
      return result;
    }
    // Subsequent calls return undefined
  };
}

// Example usage:
function myFunction(x, y) {
  return x + y;
}

const runOnce = once(myFunction);

console.log(runOnce(2, 3)); // Output: 5 (Result of myFunction)
console.log(runOnce(4, 5)); // Output: undefined
