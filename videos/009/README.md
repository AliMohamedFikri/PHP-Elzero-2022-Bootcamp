# Video 009: Boolean and Converting to Boolean in PHP

## 📝 Overview

This video explains the **Boolean data type in PHP** and how values from other data types are **converted to Boolean**.  
Booleans in PHP are very important for conditional checks (`if`, `while`, etc.), as any type can be evaluated as `true` or `false`.

## 📌 Key Concepts Covered

- Boolean has only **two possible values**:
  - `true`
  - `false`

- Values that convert to **false**:
  - `""` (empty string)
  - `0` (integer zero)
  - `"0"` (string zero)
  - `[]` (empty array)
  - `array()` (empty array)
  - `null`

- All other values convert to **true**, including:
  - Non-empty strings
  - Non-zero numbers (positive or negative)
  - Arrays with at least one element
  - Objects and resources

- Casting syntax:  
  ```php
  (bool) $value   // or (boolean) $value

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= Boolean + Converting To Boolean
============================================
*/

var_dump((bool) "");
echo '<br>';
var_dump((bool) array());
echo '<br>';
var_dump((bool) []);
echo '<br>';
var_dump((bool) 0);
echo '<br>';
var_dump((bool) "0");
echo '<br>';
var_dump((bool) "Elzero");
echo '<br>';
var_dump((bool) array(1));
echo '<br>';
var_dump((bool) [1]);
echo '<br>';
var_dump((bool) 100);
echo '<br>';
var_dump((bool) -100);
echo '<br>';
var_dump((bool) 10.5);
echo '<br>';
var_dump((bool) -10.5);
