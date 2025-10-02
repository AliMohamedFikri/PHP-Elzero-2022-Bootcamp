# Video 008: Type Casting in PHP (2025 Edition)

## 📝 Overview

This video explains **type casting** in PHP, which allows you to **manually convert a variable from one data type to another**.  
Type casting helps control how PHP interprets your data, especially in arithmetic operations or when working with mixed types.

## 📌 Key Concepts Covered

- **Common Type Casts**:
  - `(bool)` or `(boolean)` → Boolean  
  - `(int)` or `(integer)` → Integer  
  - `(float)`, `(double)`, `(real)` → Float  
  - `(string)` → String  
  - `(array)` → Array  
  - `(object)` → Object  
  - `(null)` → Null  

- **`settype()` function**: Can also convert a variable to a specific type.  

- **Casting Rules**:
  - Casting a string that starts with a number to integer → numeric part is used.  
  - Casting floats to integers → fractional part is truncated.  
  - Explicit casting overrides PHP's automatic type conversion.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= Type Casting
= ----------------------
= "boolean" or "bool"
= "integer" or "int"
= "float" or "double" or "real"
= "string"
= "array"
= "object"
= "null"
= ------
= Search For settype
============================================
*/

echo 5 + (int) "5 Lessons";
echo '<br>';
echo 5 + (integer) "5 Lessons";
echo '<br>';
echo 5 + ( integer ) "5 Lessons";
echo '<br>';
echo gettype(5 + (int) "5 Lessons");
echo '<br>';
echo 10 + 15.5;
echo '<br>';
echo 10 + (int) 15.5;
echo '<br>';
echo gettype(10 + (int) 15.5);
echo '<br>';
echo 10.5 + 10.5;
echo '<br>';
echo gettype(10.5 + 10.5);
echo '<br>';
echo (int) 10.5 + (int) 10.5; // 20
echo '<br>';
echo gettype((int) 10.5 + (int) 10.5);
echo '<br>';
echo (int) (10.5 + 10.5); // 21
