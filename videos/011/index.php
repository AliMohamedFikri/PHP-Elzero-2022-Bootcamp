<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 09 ==========
    ========================================
    ========================================
    Video: 011 – Heredoc and Nowdoc
    ========================================


    Assignment 09 
        Task:
            1.The requirement is to print the lines below exactly as they are, with each sentence on a separate line, including all existing punctuation marks.
            2.The backslash character (\) must not be used under any circumstances.
            3.HTML elements such as <br> are also not allowed.

    // Example Code:

        // Needed Output
        Hello "'Elzero'"
        We Love $Programming$
        Languages Specially "PHP"
*/

// Example solutions:

echo nl2br( <<<'TEXT'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
TEXT);


/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 10 ==========
    ========================================
    ========================================
    Video: 011 – Heredoc and Nowdoc
    ========================================


    Assignment 10 
        Task:
            1.The code below contains an error.
            2.You must first fix the error.
            3.Then, you need to remove only 2 characters from the code to produce the desired output shown below.
    // Example Code:

    $something = "Programming";

    echo <<<'code'
    Hello \PHP\
    We Love $something
            code;

    // [1] Fix The Error
    // [2] Remove 2 Characters To Get The Output

    // Needed Output
    Hello \PHP\ We Love Programming
*/

// Example solutions:

$something = "Programming";
// [1] Fix The Error  ==> algin the string vertically 
// [2] Remove 2 Characters To Get The Output  ==> switch 'code' to "code" to parse variable

echo <<<"code"
        Hello \PHP\
        We Love $something
        code;


/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 11 ==========
    ========================================
    ========================================
    Video: 011 – Heredoc and Nowdoc
    ========================================


    Assignment 11 
        Task:
            1.You have the following code below.
            2.You must not modify the string.
            3.The objective is to use what you have learned to produce the output: the number 1 in the first echo statement and the word "integer" in the second echo statement3

    // Example Code:

    echo "Hello PHP";
    echo '<br>';
    echo "Hello PHP";

    // Needed Output
    1
    integer
*/

// Example solutions:

echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)(bool)"Hello PHP");

