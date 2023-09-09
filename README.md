# LeetCode JavaScript Solutions

This repository contains my JavaScript solutions for LeetCode coding problems. Each solution is implemented in JavaScript and provides a solution to a specific LeetCode problem.

## Table of Contents

- [Introduction](#introduction)
- [Problem List](#problem-list)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

LeetCode is a popular online platform that offers a vast collection of coding interview questions. This repository serves as a compilation of my JavaScript solutions to these LeetCode problems. Each solution is organized in its own directory, named after the problem title, and contains the JavaScript file with the implementation.

## Problem List

- [Problem 1](./Create%20Hello%20World%20Function.html): Write a function createHelloWorld. It should return a new function that always returns "Hello World".
- [Problem 2](./Counter.html): Given an integer n, return a counter function. This counter function initially returns n and then returns 1 more than the previous value every subsequent time it is called (n, n + 1, n + 2, etc)
- [Problem 3](./tobeornottobe.html): Write a function expect that helps developers test their code. It should take in any value val and return an object with the following two functions.
- [Problem 4](./Filter%20Elements%20from%20Array.js): Given an integer array arr and a filtering function fn, return a filtered array filteredArr.The fn function takes one or two arguments:
arr[i] - number from the arr
i - index of arr[i]
filteredArr should only contain the elements from the arr for which the expression fn(arr[i], i) evaluates to a truthy value. A truthy value is a value where Boolean(value) returns true.

Please solve it without the built-in Array.filter method.
toBe(val) accepts another value and returns true if the two values === each other. If they are not equal, it should throw an error "Not Equal".
notToBe(val) accepts another value and returns true if the two values !== each other. If they are equal, it should throw an error "Equal".
  ...
- [Problem 5](./Return_Length_of_Arguments_Passed.js): Write a function argumentsLength that returns the count of arguments passed to it.
Add more problem sections as needed.
- [Problem 6](./Array_Reduce_Transformation.js): Given an integer array nums, a reducer function fn, and an initial value init, return a reduced array.A reduced array is created by applying the following operation: val = fn(init, nums[0]), val = fn(val, nums[1]), val = fn(val, nums[2]), ... until every element in the array has been processed. The final value of val is returned. If the length of the array is 0, it should return init.Please solve it without using the built-in Array.reduce method.
-  [Problem 7](./Allow_One_Function_Call.js): Given a function fn, return a new function that is identical to the original function except that it ensures fn is called at most once.The first time the returned function is called, it should return the same result as fn.Every subsequent time it is called, it should return undefined.
- [Problem 8](./memorize.js): Given a function fn, return a memoized version of that function.A memoized function is a function that will never be called twice with the same inputs. Instead it will return a cached value. You can assume there are 3 possible input functions: sum, fib, and factorial.sum accepts two integers a and b and returns a + b.fib acceptsasingle integer n and returns 1 if n <= 1 or fib(n - 1) + fib(n - 2) otherwise.factorial accepts a single integer n and returns 1 if n <= 1 or factorial(n - 1) * n otherwise.

## Usage

You can browse the solutions by navigating to the respective problem directories. Each solution is implemented in JavaScript and includes the necessary code to solve the corresponding LeetCode problem.

To run the code locally, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/leetcode-javascript-solutions.git
