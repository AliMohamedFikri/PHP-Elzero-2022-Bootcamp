# Video 006: Introduction to Data Types (2025 Edition)

## 📝 Overview

This video introduces **PHP data types** and demonstrates how to use the `gettype()` function to identify the type of a variable.  
Understanding data types is essential for writing correct and efficient PHP code.

## 📌 Key Concepts Covered

- **Boolean (`bool`)**: Represents `true` or `false`.  
- **Integer (`int`)**: Whole numbers (positive, negative, or zero).  
- **Float (`float`) / Double**: Decimal numbers.  
- **String (`string`)**: Text enclosed in single `' '` or double `" "` quotes.  
- **Array (`array`)**: Collection of values (indexed or associative).  
- **Other Types**: Resources, objects, NULL, etc.  
- **`gettype()` function**: Returns the data type of a variable.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= bool  => Boolean
= int   => Integer
= float => Floating Point Number | double
= string
= array
= Other Types
= gettype()
============================================
*/

echo gettype(True);
echo '<br>';
echo gettype(False);
echo '<br>';
echo gettype(true);
echo '<br>';
echo gettype(100);
echo '<br>';
echo gettype(-200);
echo '<br>';
echo gettype(0);
echo '<br>';
echo gettype(70.30);
echo '<br>';
echo gettype(-60.30);
echo '<br>';
echo gettype('Elzero');
echo '<br>';
echo gettype("Elzero");
echo '<br>';
echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
echo '<br>';
echo gettype(array("Egypt", "Saudi Arabia"));
echo '<br>';
echo gettype(["Egypt", "Saudi Arabia"]);
