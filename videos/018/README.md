# Video 018: Introduction to Constants in PHP

## 📝 Overview

This video introduces **constants** in PHP. Unlike variables, a constant’s value **cannot be changed** during script execution. They are often used for values that remain fixed throughout the application (e.g., database credentials, configuration values).  

## 📌 Key Concepts Covered

- **What is a Constant?**
  - A constant is a name/value pair that cannot be reassigned once defined.
  - It is defined using the `define()` function.
  - Constants are **global** and can be accessed anywhere in the script.

- **Naming Conventions**:
  - Constants are usually written in **UPPERCASE** (by convention).
  - Example: `DB_NAME`, `SITE_URL`.

- **Difference from Variables**:
  - Variables start with `$`, while constants do not.
  - Constants remain fixed; variables can change.

- **Best Practices**:
  - Use constants for values that will not change, such as:
    - Database credentials
    - Application configuration
    - Fixed numbers/strings used in multiple places

## 🛠️ Example Code

```php
<?php

/*
============================================
= Constants
= ---------
= That Value Cannot Change During Execution
= Constants Always Uppercase
============================================
*/

define("DB_NAME", "elzero");
define("MAIN_NUMBER", 5);

// Using constants
echo DB_NAME;             // Outputs: elzero
echo '<br>';
echo MAIN_NUMBER * 50;    // Outputs: 250
