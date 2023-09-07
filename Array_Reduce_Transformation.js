var reduce = function(nums, fn, init) {
  let val = init;
  
  for (let i = 0; i < nums.length; i++) {
    val = fn(val, nums[i]);
  }
  
  return val;
};

// example usages
const values = [7, 3, 11, 5, 9];
const max = reduce(values, (accumulator, currentValue) => Math.max(accumulator, currentValue), values[0]);
console.log(max); // Output: 11 (Maximum value in the array)
