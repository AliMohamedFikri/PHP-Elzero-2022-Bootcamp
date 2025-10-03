<?php
/*
    ========================================
    ========================================
    ========= PHP Bootcamp Lab 16 ==========
    ========================================
    ========================================
    Video: 017 – Predefined Variables
    ========================================


    Assignment 016
        Task:
            1.Use the predefined variables to print the following values:
            2.Line 1: Document Root
            3.Line 2: Server Name
            4.Line 3: System Root
            5.Line 4: OpenSSL Configuration

    // Example Code:
    
    "C:/xampp/htdocs"
    "localhost"
    "C:\WINDOWS"
    "C:/xampp/apache/bin/openssl.cnf"
*/

// Example solutions:

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo '<br>';
echo $_SERVER['SystemRoot'];
echo '<br>';
echo $_SERVER['OPENSSL_CONF'];
echo '<br>'; 