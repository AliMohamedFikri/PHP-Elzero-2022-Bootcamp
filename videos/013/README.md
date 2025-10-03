# Video 013: Introduction To Variables And Naming Rules in PHP

## 📝 Overview

This lesson introduces **variables in PHP**, their **naming rules**, and how PHP handles variable interpolation in **single vs. double quotes**.  

It also explains why PHP is called a **loosely typed language** (no need to declare variable types explicitly).

## 📌 Key Concepts Covered

- Variables must follow these rules:
  1. Start with a **dollar sign** (`$`).
  2. Start with a **letter** (`a-z`, `A-Z`) or an **underscore** (`_`).
  3. Can contain **numbers** inside the name.
  4. **No special characters** allowed (e.g., `@`, `-`, `%`).
  5. **Case-sensitive** (`$username` ≠ `$Username`).

- **Single vs. Double Quotes**:
  - `'Hello $username'` → `$username` is treated as plain text.
  - `"Hello $username"` → `$username` is **evaluated** and replaced with its value.

- PHP is a **loosely typed language**, meaning variable types are determined automatically based on the assigned value.

## 🛠️ Example Code

```php
<?php

/*
  Variables
  - Naming Rules + Info
  [1] Start With Dollar Sign $
  [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
  [3] You Can Use Numbers Inside The Name
  [4] No Special Characters Allowed
  [5] Case Sensitive
  - Test Single And Double Quotes

  Search
  - Loosely Typed Language
*/

$username = "Osama";
$Username = "Elzero";

echo $username;      // Output: Osama
echo '<br>';
echo $Username;      // Output: Elzero
echo '<br>';
echo 'Hello $username';  // Output: Hello $username
echo '<br>';
echo "Hello $username";  // Output: Hello Osama
