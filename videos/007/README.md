# Video 007: Type Juggling and Automatic Type Conversion (2025 Edition)

## 📝 Overview

This video explains **type juggling** and **automatic type conversion** in PHP.  
PHP automatically converts data types depending on the operation being performed, which is called **type juggling**.

## 📌 Key Concepts Covered

- **Type Juggling**: PHP automatically converts variables to the type needed for the operation.  
- **Boolean to Integer Conversion**: `true` becomes `1`, `false` becomes `0` when used in numeric operations.  
- **String to Number Conversion**: When a string contains a number at the beginning, PHP uses that number in arithmetic operations.  
- **Automatic Type Conversion Rules**:  
  - Integer + Float → Float  
  - Boolean + Boolean → Integer  
  - String containing numbers → Numeric value  
- **Warnings**: Operations on invalid strings may generate warnings, but PHP still attempts conversion.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= Type Juggling + Automatic Type Conversion
============================================
*/

echo 1 + "2"; // 3
echo '<br>';
echo gettype(1 + "2"); // Integer
echo '<br>';
echo True; // 1
echo '<br>';
echo gettype(True); // Boolean
echo '<br>';
echo True + True; // 2
echo '<br>';
echo gettype(True + True); // Integer
echo '<br>';
echo 5 + '5 Lessons'; // 10 => Warning
echo '<br>';
echo gettype(5 + '5 Lessons'); // Integer => Warning
echo '<br>';
echo 10 + 15.5; // 25.5
echo '<br>';
echo gettype(10 + 15.5); // double => Float
echo '<br>';
