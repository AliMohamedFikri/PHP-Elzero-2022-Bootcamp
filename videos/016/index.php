<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 15 ==========
    ========================================
    ========================================
    Video: 016 – Assign By Value And By Reference
    ========================================


    Assignment 015
        Task:
            1.You have the following code:
            2.How can we make the value of variable b equal to 100 without changing the values ​​of variables 100 and 200?

    // Example Code:
    
    $a = 200;
    $b = $a;
    $a = 100;

    echo $b; // 100
*/

// Example solutions:

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100