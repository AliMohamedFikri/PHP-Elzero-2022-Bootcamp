# Video 016: Assign by Value and by Reference in PHP

## 📝 Overview

In this lesson, we learn the difference between **assigning variables by value** and **assigning by reference** in PHP.  

- By default, PHP assigns variables **by value**, meaning each variable stores its own copy.  
- When assigning **by reference**, one variable becomes an **alias** of another, so they both point to the same data.  

## 📌 Key Concepts Covered

- **Assign by Value (default)**:
  - Each variable has its **own copy** of the value.
  - Changing one variable does not affect the other.

- **Assign by Reference**:
  - Using the `&` symbol when assigning makes one variable an **alias** of the other.
  - Both variables point to the same memory location.
  - Changing one will **automatically update the other**.

- **Important Note**:
  - PHP references are **not the same as C/C++ pointers**.
  - They act as *aliases* to the same value, not memory addresses.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Assign Variable By Reference
= -----------------------------
= By Default → Assigned By Value
= By Reference → Variable Alias
============================================
*/

$a = "Osama";   // Normal assignment
$b = &$a;       // Assign by reference

$b = "Elzero";  // Changes $a too
$a = "School";  // Changes $b too

echo $a;  // School
echo '<br>';
echo $b;  // School
