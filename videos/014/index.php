<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 13 ==========
    ========================================
    ========================================
    Video: 014 – Boolean and Converting to Boolean
    ========================================


    Assignment 013 
        Task:
            1.You have the following code for a complete webpage.  
            2.Use what you learned about variables so that we can easily change the text "Elzero Courses" in the future.

    // Example Code:
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Elzero Courses">
        <title>Welcome To Elzero Courses</title>
    </head>
    <body>
        <h1>Elzero Courses</h1>
        <p>Here In Elzero Courses We Provide Front-End And Back-End Courses</p>
        <hr>
        <div>Elzero Courses Is The What You Need.</div>
        <footer>All Right Reserved To Elzero Courses</footer>
    </body>
    </html>
*/

// Example solutions:

$instructor ="Elzero Courses" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $instructor?>">
    <title>Welcome To <?=$instructor?></title>
</head>

<body>
    <h1><?=$instructor?></h1>
    <p>Here In <?=$instructor?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?=$instructor?> Is The What You Need.</div>
    <footer>All Right Reserved To <?=$instructor?></footer>
</body>

</html>