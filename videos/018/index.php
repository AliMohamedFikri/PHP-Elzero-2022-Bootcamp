<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 06 ==========
    ========================================
    ========================================
    Video: 009 – Boolean and Converting to Boolean
    ========================================


    Assignment 06 
        Task:
            1.You have the number 100.
            2.You are required to use two different methods to print the data type.
            3.It can be either "int" or "Integer"; either is acceptable.
            4.There is a third method you can research for additional information; this is optional.

    // Example Code:
    100

    // Method One
    // Method Two
    // Method Three => Optional
*/

// Example solutions:

// print DataType of 100 using three method

// Method 1
echo gettype(100);
echo '<br>';  

// Method 2
echo var_dump(100);
echo '<br>';  

// Method 3
echo get_debug_type(100);
echo '<br>';  