# Video 019: Predefined and Magic Constants in PHP

## 📝 Overview

This video explains **predefined constants**, **magic constants**, and how PHP handles **reserved keywords**.  
It demonstrates constants that PHP provides by default, as well as special magic constants that change depending on where they are used.

## 📌 Key Concepts Covered

- **Predefined Constants** (built into PHP, case-sensitive):
  - `PHP_VERSION` → Current PHP version.
  - `PHP_OS_FAMILY` → The OS family (Windows, Linux, Darwin…).
  - `PHP_INT_MAX` → Maximum integer value supported.
  - `DEFAULT_INCLUDE_PATH` → Default include path.

- **Magic Constants** (special, context-aware, case-insensitive):
  - `__LINE__` → Current line number in the file.
  - `__FILE__` → Full path and filename of the file.
  - `__DIR__` → Directory of the file.

- **Reserved Keywords**:
  - Cannot be used as function or class names (`break`, `clone`, etc.).
  - Attempting to use them will result in a **syntax error**.

- **Defining Custom Constants**:
  - Use `define("NAME", "value");`
  - Example: `define("BREAKS", "AA");`

## 🛠️ Example Code

```php
<?php

/*
============================================
= Predefined and Magic Constants
= -----------------------------------------
= Predefined Constants (Case Sensitive)
= Magic Constants (Case Insensitive)
= Reserved Keywords
============================================
*/

define("BREAKS", "AA");

// Predefined constants
echo php_uname();       // System info
echo '<br>';
echo PHP_VERSION;       // PHP version
echo '<br>';

// Magic constants
echo __LINE__;          // Current line number
echo '<br>';
echo __FILE__;          // File path
echo '<br>';
echo __DIR__;           // Directory path
echo '<br>';

// Custom constant
echo BREAKS;

echo '<br>';

// No problem with custom function
function hello() {
  return "Hello";
}
echo hello();

// ERROR: Cannot use reserved word "clone" as function name
function clone() {
  return "Clone";
}
echo clone();
