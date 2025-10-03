# Video 010: String And Escaping in PHP

## 📝 Overview

This video introduces the **string data type in PHP** and how to handle **special characters** inside strings.  
We also learn about escaping rules, multi-line strings, and how to preserve line breaks for HTML output.

## 📌 Key Concepts Covered

- Strings can be defined using:
  - Single quotes `' '`
  - Double quotes `" "`

- **Escaping characters** with backslash `\`:
  - `\'` → Single quote inside single-quoted string.
  - `\"` → Double quote inside double-quoted string.
  - `\\` → Backslash.

- Difference between **single** and **double quotes**:
  - Single quotes do not parse variables or most escape sequences.
  - Double quotes allow variable interpolation and more escape sequences.

- Multi-line strings are allowed in PHP.

- Use `nl2br()` to convert newlines into `<br>` tags for HTML display.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= String And Escaping
= -------------------
= nl2br()
============================================
*/

echo 'Hello PHP';
echo '<br>';

echo "Hello PHP";
echo '<br>';

echo "Hello 'PHP'";
echo '<br>';

echo 'Hello "PHP"';
echo '<br>';

echo 'Hello \'PHP\'';
echo '<br>';

echo "Hello \"PHP\"";
echo '<br>';

echo "Hello PHP\\";
echo '<br>';

// Multi-line string
echo 'Hello PHP
On Multiple
Lines';
echo '<br>';

// Preserve line breaks in HTML
echo nl2br('Hello PHP
On Multiple
Lines');
