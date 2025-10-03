# Video 012: Arrays with Complex Tests in PHP

## 📝 Overview

This video explains how arrays work in PHP when using **different types of keys** (integers, strings, booleans).  
It also shows how PHP automatically converts keys and handles duplicate keys.

## 📌 Key Concepts Covered

- Arrays in PHP can be defined with or without keys:
  - `["value1", "value2"]` → Numeric keys (0, 1, 2…).
  - `[0 => "value1", "key" => "value2"]` → Mixed keys.

- **Key rules in PHP arrays**:
  - Integer keys start from `0` if not defined.
  - String keys stay as they are.
  - Boolean keys are converted to integers:
    - `true` → `1`
    - `false` → `0`
  - Duplicate keys override previous values.

- **Nested arrays** are supported and can store complex structures.

- Use `print_r()` inside `<pre>` tags for **readable array output**.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= Array With Complex Tests
= ------------------------
= Array With Key
= Array Without Keys
= Array With One Key
= Array Value Override
= print_r()
============================================
*/

echo '<pre>';
print_r([
  0 => "Sameh",          // Explicit numeric key
  "A" => "Ahmed",        // String key
  "B" => "Basem",        // String key
  "Mahmoud",             // Auto index => 1
  True => "Sayed",       // true => 1 (overrides Mahmoud)
  "1" => "Osama",        // string "1" => int 1 (overrides Sayed)
  "Gamal",               // Auto index => 2
  9 => "Amera",          // Explicit numeric key
  "Eman",                // Auto index => 10
  "Mohamed",             // Auto index => 11
  False => "Asmaa",      // false => 0 (overrides Sameh)
  8 => "Haytham",        // Explicit numeric key
  "Samer",               // Auto index => 12
  "Names" => [           // Nested array
    "Osama",
    "Ahmed",
    "Sayed" => [
      "1",
      "2",
      "3"
    ]
  ]
]);
echo '</pre>';
