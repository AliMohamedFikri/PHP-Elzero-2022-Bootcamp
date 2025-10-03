<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 14 ==========
    ========================================
    ========================================
    Video: 015 – Variable Variable
    ========================================


    Assignment 014
        Task:
            1.You have the following code with two variables.
            2.The task is to print the word "Web" in five different ways using what you have learned.
            3.All five methods must use the echo only.

    // Example Code:
    
    $name = "elzero";
    $$name = "Web";
*/

// Example solutions:

// Method 1: Directly use the variable variable
echo $elzero;
echo "<br>";

// Method 2: Use $$
echo $$name;
echo "<br>";

// Method 3: Use curly braces with variable variables
echo ${$name};
echo "<br>";

// Method 4: Use string interpolation with $elzero
echo "$elzero";
echo "<br>";

// Method 5: Interpolation with ${$name}
echo "${$name}";
echo "<br>";  