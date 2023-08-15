/**
 * Composes an array of functions into a single function.
 * @param {Function[]} functions - Array of functions to compose.
 * @returns {Function} - The composed function.
 */
function compose(functions) {
    if (functions.length === 0) {
        return function(x) { return x; };
    }

    return functions.reduceRight((prevFn, nextFn) => {
        return function(x) {
            return nextFn(prevFn(x));
        };
    });
}

// Example usage
const increment = x => x + 1;
const double = x => 2 * x;

const fn = compose([increment, double]);
console.log(fn(4)); // Output: 9
