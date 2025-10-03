# Video 011: Heredoc and Nowdoc in PHP

## 📝 Overview

This video introduces **Heredoc** and **Nowdoc**, two special ways of defining multi-line strings in PHP.  
They are useful for handling text blocks such as HTML, SQL queries, or documentation without worrying too much about escaping quotes.

## 📌 Key Concepts Covered

- **Heredoc (`<<<"IDENTIFIER"`)**
  - Acts like a **double-quoted string**.
  - Supports **variable interpolation** and escape sequences.
  - No need to escape quotes.

- **Nowdoc (`<<<'IDENTIFIER'`)**
  - Acts like a **single-quoted string**.
  - Does **not parse variables** or escape sequences.
  - Treats everything inside as plain text.

- **Use cases**:
  - Writing large text blocks (HTML, SQL, templates).
  - Cleaner syntax instead of concatenation or escaping.

## 🛠️ Example Code

```php
<?php

/*
============================================
= Data Types
= ----------
= Heredoc and Nowdoc
============================================
*/

$name = "Osama";

// Heredoc Example
echo <<<"Here"
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Here;

echo '<br>';

// Nowdoc Example
echo <<<'Now'
Hello PHP
Special Characters $$$ ' ' ' """"" \\\\
Hello My Name Is $name
Now;

echo '<br>';

// Normal HTML with concatenation
echo '<ul>';
  echo "<li>" . $name . "</li>";
  echo "<li>" . $name . "</li>";
  echo "<li>" . $name . "</li>";
  echo "<li>" . $name . "</li>";
echo '</ul>';

echo '<br>';

// Heredoc with HTML
echo <<<"navlinks"
<ul>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
  <li>$name</li>
</ul>
navlinks;
