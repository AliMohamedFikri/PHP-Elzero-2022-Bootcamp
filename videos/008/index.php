<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 05 ==========
    ========================================
    ========================================
    Video: 006 – Introduction To Data Types
    ========================================


    Assignment 05 – Using Comments
        Task:
            1.You have the following code below.
            2.You are not allowed to modify the numbers or their positions.
            3.Use what you have learned to make the final result the number 50, and the data type Integer.
            4.In the first line, print the number, and in the second line, print "Integer".

    // Example Code:
    echo 15.2 + 14.7 + (10.5 + 10.5); // 50
    echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
*/

// Example solutions:

echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
echo '<br>';  
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5)));// Integer
