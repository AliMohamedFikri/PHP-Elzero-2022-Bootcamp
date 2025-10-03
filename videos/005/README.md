# Video 005: PHP Comments and Best Practices

## 📝 Overview

This video explains the **different types of comments in PHP** and introduces some **best practices** for writing clean, maintainable code.  

Comments are essential for documenting your code, improving readability, and temporarily disabling code during testing.

## 📌 Key Concepts Covered

- **Single-Line Comments**:  
  - Using `//`  
  - Using `#`  

- **Multi-Line Comments**:  
  - Using `/* ... */` for multiple lines  
  - Can also be used for a single line  

- **Special Multi-Line Formatting**:  
  - Decorative blocks to highlight sections of code (e.g., headers for apps or modules)  

- **Best Practices**:  
  - Use comments to explain *why* the code is written, not *what* it does.  
  - Avoid over-commenting trivial code.  
  - Keep comments clear and concise.  

- **Print vs Echo** (example note):  
  - `print` and `echo` both output data.  
  - The statement in the example claiming `print` is faster than `echo` is **not true**.

## 🛠️ Example Code

```php
<?php

// Single Line Comment
echo 'Test'; // Single Line Comment
echo 'Test'; # Single Line Comment

/*
  Line 1
  Line 2
*/

/*
  ====================
  == My Special App ==
  ====================
*/

/* Single Line */

echo 'Test' /* Single Line */;

// I Used Print Because Its Faster Than Echo <= Example Not True
print 'Test';
