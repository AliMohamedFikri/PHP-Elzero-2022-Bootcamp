<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 07 ==========
    ========================================
    ========================================
    Video: 010 – String And Escaping
    ========================================


    Assignment 07 
        Task:
            1.Replace the question marks with the appropriate text to achieve the desired output shown below.
            Note: You should not use heredoc or nowdoc syntax.

    // Example Code:
    echo "???";

    // Needed Output
    // Hello "Elzero" \\ """ We Love "$$PHP"
*/

// Example solutions:

echo 'Hello "Elzero" \\\\ """ We Love "$$PHP"';



/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 08 ==========
    ========================================
    ========================================
    Video: 010 – String And Escaping
    ========================================


    Assignment 08 
        Task:
            1.You have the following code:
            2.It contains "\n", which is the character for a new line.
            3.However, all these words will appear on the same line.
            4.Modify the code so that each word appears on a separate line when printed.

    // Example Code:
    echo "We \n Love \n Elzero \n Web \n School";

    // Needed Output
    We
    Love
    Elzero
    Web
    School
*/

// Example solutions:

echo nl2br("We \n Love \n Elzero \n Web \n School");