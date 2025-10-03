<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 18 ==========
    ========================================
    ========================================
    Video: 019 – Predefined And Magic Constants
    ========================================


    Assignment 18 
        Task:
            1.In the first line, write code that prints the line number where this code is located.
            2.In the second line, print the name of the file containing this code.
            3.In the third line, print the folder that contains the file where this code is located3

    // Example Code:
    
    "60"
    "C:\xampp\htdocs\elzero\index.php"
    "C:\xampp\htdocs\elzero"
*/

// Example solutions:

// Magic constants
echo __LINE__;          // Current line number
echo '<br>';
echo __FILE__;          // File path
echo '<br>';
echo __DIR__;           // Directory path
echo '<br>'; 