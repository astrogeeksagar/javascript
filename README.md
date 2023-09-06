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
- [Problem ](./Return_Length_of_Arguments_Passed.js): Write a function argumentsLength that returns the count of arguments passed to it.
Add more problem sections as needed.

## Usage

You can browse the solutions by navigating to the respective problem directories. Each solution is implemented in JavaScript and includes the necessary code to solve the corresponding LeetCode problem.

To run the code locally, follow these steps:

1. Clone the repository:

   ```bash
   git clone https://github.com/your-username/leetcode-javascript-solutions.git
